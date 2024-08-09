<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
    public function index()
    {
        // Mengambil seluruh data produk beserta gambar dan kategori
        $products = Product::with(['images', 'categories'])->get();

        // Mengambil data kategori
        $categories = Category::all();

        // Mengirim data kategori ke view
        return view('admin.page.produk', compact('products', 'categories'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'weight' => 'required|numeric',
            'categories' => 'required|array',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // maksimal 5MB
        ]);

        DB::beginTransaction();
        try {
            // Simpan data produk
            try {
                $product = Product::create([
                    'product_name' => $request->name,
                    'product_description' => $request->description,
                    'price' => $request->price,
                    'stock' => $request->stock,
                    'product_weight' => $request->weight,
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Error saving product data: ' . $e->getMessage());
            }

            // Simpan kategori produk
            try {
                foreach ($request->categories as $categoryId) {
                    ProductCategory::create([
                        'product_id' => $product->id,
                        'category_id' => $categoryId,
                    ]);
                }
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Error saving product categories: ' . $e->getMessage());
            }

            // Simpan gambar produk
            try {
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('product_images', 'public');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_url' => $imagePath,
                    ]);
                }
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Error saving product image: ' . $e->getMessage());
            }

            DB::commit();
            return redirect()->back()->with('success', 'Product added successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'There was an error saving the product: ' . $e->getMessage());
        }
    }
}
