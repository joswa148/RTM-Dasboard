<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LogoController extends Controller
{
    public function index()
    {
        // Auto-fix duplicates or gaps if they exist.
        // This ensures the order is always clean (0, 1, 2...)
        $this->normalizeOrdersIfNeeded();

        $logos = Logo::ordered()->get();
        return view('admin.logos.index', compact('logos'));
    }

    /**
     * Checks if orders are messy (duplicates or non-sequential) and fixes them.
     */
    private function normalizeOrdersIfNeeded()
    {
        $all = Logo::ordered()->get();
        $needsFix = false;
        $expected = 0;

        foreach ($all as $l) {
            if ($l->order !== $expected) {
                $needsFix = true;
                break;
            }
            $expected++;
        }

        if ($needsFix) {
            Logo::resequence();
            Cache::forget('trusted_logos');
        }
    }

    public function create()
    {
        return view('admin.logos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'alt_text' => 'nullable|string|max:255',
            'order'    => 'nullable|integer|min:0',
        ]);

        $path = $request->file('image')->store('logos', 'public');

        $targetOrder = ($request->order === null || $request->order === '')
            ? Logo::nextOrder()
            : (int) $request->order;

        DB::transaction(function () use ($path, $request, $targetOrder) {
            $logo = Logo::create([
                'image_path' => $path,
                'alt_text'   => $request->alt_text,
                'order'      => Logo::nextOrder(),
                'is_active'  => true,
            ]);

            Logo::resequence($logo, $targetOrder);
        });

        Cache::forget('trusted_logos');

        return redirect()->route('admin.logos.index')->with('success', 'Logo added successfully.');
    }

    public function edit(Logo $logo)
    {
        return view('admin.logos.edit', compact('logo'));
    }

    public function update(Request $request, Logo $logo)
    {
        $request->validate([
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'alt_text'  => 'nullable|string|max:255',
            'order'     => 'nullable|integer|min:0',
            'is_active' => 'nullable',
        ]);

        $newOrder = ($request->order === null || $request->order === '')
            ? max(Logo::count() - 1, 0)
            : (int) $request->order;

        $data = [
            'alt_text'  => $request->alt_text,
            'is_active' => $request->has('is_active'),
        ];

        $oldStoragePath = null;
        $newStoragePath = null;

        // If a new image is uploaded, handle replacement
        if ($request->hasFile('image')) {
            // Defer deleting the old file until after the database update succeeds.
            if (!str_starts_with($logo->image_path, 'assets/')) {
                $oldStoragePath = $logo->image_path;
            }

            // Store new file
            $newStoragePath = $request->file('image')->store('logos', 'public');
            $data['image_path'] = $newStoragePath;
        }

        try {
            DB::transaction(function () use ($logo, $data, $newOrder) {
                $logo->update($data);
                Logo::resequence($logo->fresh(), $newOrder);
            });
        } catch (\Throwable $e) {
            // If the DB write fails after storing the new image, clean up the orphaned file.
            if ($newStoragePath) {
                Storage::disk('public')->delete($newStoragePath);
            }

            throw $e;
        }

        if ($oldStoragePath) {
            Storage::disk('public')->delete($oldStoragePath);
        }

        Cache::forget('trusted_logos');

        return redirect()->route('admin.logos.index')->with('success', 'Logo updated successfully.');
    }

    public function destroy(Logo $logo)
    {
        // image_path is stored as 'logos/filename.jpg' — delete from the public disk
        Storage::disk('public')->delete($logo->image_path);
        DB::transaction(function () use ($logo) {
            $logo->delete();
            Logo::resequence();
        });

        Cache::forget('trusted_logos');

        return redirect()->route('admin.logos.index')->with('success', 'Logo deleted successfully.');
    }
}
