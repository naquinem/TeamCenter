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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        $component = Component::create([
            'item_code' => $validated['item_code'],
            'product_name' => $validated['product_name'],
            'part' => $validated['part'],
            'image' => $imagePath,
            'price' => $validated['price'],
            'quantity' => $validated['quantity']
        ]);
    }
}
