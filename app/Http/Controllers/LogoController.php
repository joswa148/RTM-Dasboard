<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::orderBy('order')->get();
        return view('admin.logos.index', compact('logos'));
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
        // $path = 'logos/filename.jpg'
        // Storage::url() = '/storage/logos/filename.jpg' — works after php artisan storage:link

        Logo::create([
            'image_path' => $path,          // store ONLY the relative path: logos/filename.jpg
            'alt_text'   => $request->alt_text,
            'order'      => $request->order ?? 0,
            'is_active'  => true,
        ]);

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

        $data = [
            'alt_text'  => $request->alt_text,
            'order'     => $request->order ?? 0,
            'is_active' => $request->has('is_active'),
        ];

        // If a new image is uploaded, handle replacement
        if ($request->hasFile('image')) {
            // Delete old file if it's a storage upload (not a seeded asset)
            if (!str_starts_with($logo->image_path, 'assets/')) {
                Storage::disk('public')->delete($logo->image_path);
            }

            // Store new file
            $data['image_path'] = $request->file('image')->store('logos', 'public');
        }

        $logo->update($data);

        Cache::forget('trusted_logos');

        return redirect()->route('admin.logos.index')->with('success', 'Logo updated successfully.');
    }

    public function destroy(Logo $logo)
    {
        // image_path is stored as 'logos/filename.jpg' — delete from the public disk
        Storage::disk('public')->delete($logo->image_path);
        $logo->delete();

        Cache::forget('trusted_logos');

        return redirect()->route('admin.logos.index')->with('success', 'Logo deleted successfully.');
    }
}
