<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function students()
    {
        return view('admin.students');
    }

    public function products()
    {
        $proudcts = Product::all();
        return view('admin.products', compact('proudcts'));
    }

    public function add_product(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // 
        // $imagePath = $request->file('image')->store('products', 'public');

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('uploads/products'), $filename);

            $imagePath = 'uploads/products/' . $filename;
        }



        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('products')->with('success', 'Product added successfully!');
    }
}
