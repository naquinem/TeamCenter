<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Components extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'item_code' => 'required|string|max:255',
            'product_name' => 'required|string|max:255',
            'part' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        $component = Component::create([
            'item_code' => $validated['item_code'],
            'product_name' => $validated['product_name'],
            'part' => $validated['part'],
            'price' => $validated['price'],
            'quantity' => $validated['quantity'],
            'image' => $imagePath,
        ]);
        return response()->json([
            'message' => 'Product created successfully!',
            'component' => $component,
        ], 200);
    }
}
