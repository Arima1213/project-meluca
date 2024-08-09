<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class productsController extends Controller
{
    public function index()
    {
        $products = Product::with('categories', 'images')->get();
        $categories = Category::all();
        return view('admin.page.produk', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'weight' => 'required|numeric',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'required|image|max:5120',
            'categories' => 'required|array',
        ]);

        $product = new Product();
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_weight = $request->weight;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        $product->categories()->attach($request->categories);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->images()->create(['image_url' => $imagePath]);
        }

        return redirect()->route('admin-product')->with('alert', [
            'type' => 'success',
            'title' => 'Berhasil!',
            'message' => 'Produk berhasil ditambahkan.'
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'weight' => 'required|numeric',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'nullable|image|max:5120',
            'categories' => 'required|array',
        ]);

        $product = Product::findOrFail($request->id);
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_weight = $request->weight;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        $product->categories()->sync($request->categories);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->images->first()) {
                Storage::delete('public/' . $product->images->first()->image_url);
                $product->images->first()->delete();
            }
            // Store new image
            $imagePath = $request->file('image')->store('products', 'public');
            $product->images()->create(['image_url' => $imagePath]);
        }

        return redirect()->route('admin-product')->with('alert', [
            'type' => 'success',
            'title' => 'Berhasil!',
            'message' => 'Produk berhasil diperbarui.'
        ]);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:products,id',
        ]);

        $product = Product::findOrFail($request->id);
        if ($product->images->first()) {
            Storage::delete('public/' . $product->images->first()->image_url);
            $product->images->first()->delete();
        }
        $product->categories()->detach();
        $product->delete();

        return redirect()->route('admin-product')->with('alert', [
            'type' => 'success',
            'title' => 'Berhasil!',
            'message' => 'Produk berhasil dihapus.'
        ]);
    }
}