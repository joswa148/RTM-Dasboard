<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Logo;
use Illuminate\Support\Facades\Storage;

$logo = Logo::where('id', 1)->first(); // Assuming Nutrible is ID 1 or similar
if (!$logo) {
    echo "No logo found\n";
    exit;
}

echo "Database Path: " . $logo->image_path . "\n";
echo "Generated URL: " . $logo->image_url . "\n";

$purePath = $logo->image_path;
echo "Exists on disk (.webp)? " . (Storage::disk('public')->exists($purePath) ? 'YES' : 'NO') . "\n";

$extension = pathinfo($purePath, PATHINFO_EXTENSION);
$baseName = pathinfo($purePath, PATHINFO_FILENAME);
$dirName = pathinfo($purePath, PATHINFO_DIRNAME);
$dirPrefix = ($dirName === '.') ? '' : "$dirName/";
$fallbackExt = ($extension === 'webp') ? 'png' : 'webp';
$fallbackPath = "{$dirPrefix}{$baseName}.{$fallbackExt}";

echo "Fallback Path: " . $fallbackPath . "\n";
echo "Exists on disk (fallback)? " . (Storage::disk('public')->exists($fallbackPath) ? 'YES' : 'NO') . "\n";
