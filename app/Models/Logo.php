<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Logo extends Model
{
    protected $fillable = ['image_path', 'alt_text', 'order', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
        'order'     => 'integer',
    ];

    /**
     * Get the full public URL for the logo image.
     * Works automatically whether the path is the new format (logos/file.jpg)
     * or old format (storage/logos/file.jpg).
     */
    public function getImageUrlAttribute(): string
    {
        // 1. If path starts with 'assets/', it's a seeded/static image in the public folder
        if (str_starts_with($this->image_path, 'assets/')) {
            return asset($this->image_path);
        }

        // 2. If path starts with 'storage/', it was likely stored with the full prefix (old format)
        $isOldFormat = str_starts_with($this->image_path, 'storage/');
        $purePath = $isOldFormat ? substr($this->image_path, strlen('storage/')) : $this->image_path;

        // --- EXTENSION FALLBACK LOGIC ---
        // If the file doesn't exist with current extension, try swapping .webp <-> .png
        // We check existence on disk. If we found NO webp but we find a PNG, we swap.
        if (!Storage::disk('public')->exists($purePath)) {
            $extension = pathinfo($purePath, PATHINFO_EXTENSION);
            $baseName = pathinfo($purePath, PATHINFO_FILENAME);
            $dirName = pathinfo($purePath, PATHINFO_DIRNAME);
            $dirPrefix = ($dirName === '.') ? '' : "$dirName/";

            $fallbackExt = ($extension === 'webp') ? 'png' : 'webp';
            $fallbackPath = "{$dirPrefix}{$baseName}.{$fallbackExt}";

            if (Storage::disk('public')->exists($fallbackPath)) {
                $purePath = $fallbackPath;
            }
        } else {
            // Even if Storage says it exists, let's do a double-check if we are in a web environment
            // because sometimes Storage::exists can have false positives on some Windows setups
            $absolutePath = storage_path('app/public/' . $purePath);
            if (!file_exists($absolutePath)) {
                 $extension = pathinfo($purePath, PATHINFO_EXTENSION);
                 $baseName = pathinfo($purePath, PATHINFO_FILENAME);
                 $dirName = pathinfo($purePath, PATHINFO_DIRNAME);
                 $dirPrefix = ($dirName === '.') ? '' : "$dirName/";
                 $fallbackExt = ($extension === 'webp') ? 'png' : 'webp';
                 $fallbackPath = "{$dirPrefix}{$baseName}.{$fallbackExt}";
                 if (Storage::disk('public')->exists($fallbackPath)) {
                     $purePath = $fallbackPath;
                 }
            }
        }

        // Even if the file works, we use our proxy route if it's in storage to bypass 403 issues
        // We use the proxy route for EVERYTHING in storage
        return url('/storage-img/' . $purePath);
    }

    /** Scope: only active logos. */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /** Scope: ordered by the `order` column ascending. */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
