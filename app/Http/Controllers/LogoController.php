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
        // Auto-fix duplicates or gaps if they exist (Industry level robustness)
        // This ensures the order is always clean (1, 2, 3...)
        $this->normalizeOrdersIfNeeded();

        $logos = Logo::orderBy('order')->get();
        return view('admin.logos.index', compact('logos'));
    }

    /**
     * Checks if orders are messy (duplicates or non-sequential) and fixes them.
     */
    private function normalizeOrdersIfNeeded()
    {
        $all = Logo::orderBy('order')->orderBy('updated_at', 'desc')->get();
        $needsFix = false;
        $expected = 1;

        foreach ($all as $l) {
            if ($l->order !== $expected) {
                $needsFix = true;
                break;
            }
            $expected++;
        }

        if ($needsFix) {
            foreach ($all as $index => $l) {
                $l->update(['order' => $index + 1]);
            }
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

        $order = $request->order;
        if ($order === null || $order === '') {
            $order = Logo::nextOrder();
        } else {
            // Collision handling: shift others up if this order exists
            if (Logo::where('order', $order)->exists()) {
                Logo::shiftOrders($order);
            }
        }

        Logo::create([
            'image_path' => $path,
            'alt_text'   => $request->alt_text,
            'order'      => $order,
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

        $newOrder = $request->order;
        if ($newOrder === null || $newOrder === '') {
            // If clearing the order, put it at the end
            $newOrder = Logo::nextOrder();
        } else {
            // If manual order is provided and it's different from current, handle collision
            if ($newOrder != $logo->order) {
                if (Logo::where('order', $newOrder)->where('id', '!=', $logo->id)->exists()) {
                    Logo::shiftOrders($newOrder, $logo->id);
                }
            }
        }

        $data = [
            'alt_text'  => $request->alt_text,
            'order'     => $newOrder,
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
