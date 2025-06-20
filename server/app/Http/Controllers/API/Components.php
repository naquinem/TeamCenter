<?php

namespace App\Http\Controllers\API;

use App\Models\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Components extends Controller
{
    public function storeComponent(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'item_code'     => 'required|string|max:255',
            'product_name'  => 'required|string|max:255',
            'part'          => 'required|string|max:255',
            'price'         => 'nullable|numeric',
            'quantity'      => 'nullable|integer',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        // Handle optional image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        // Create the component
        $component = Component::create([
            'item_code'     => $validated['item_code'],
            'product_name'  => $validated['product_name'],
            'part'          => $validated['part'],
            'price'         => $validated['price'] ?? null,
            'quantity'      => $validated['quantity'] ?? 0,
            'image'         => $imagePath,
        ]);
        return response()->json([
            'message' => 'Component added successfully',
            'component' => $component
        ], 201);
    }
    public function showComponent(Request $request) {
        $components = Component::all();

        foreach ($components as $component) {
            $component->image = url('storage/' . $component->image); // Generate full image URL
        }

        return response()->json($components);
    }
}
