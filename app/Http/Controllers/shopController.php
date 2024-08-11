<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('category');
        if ($categoryId) {
            $products = Product::whereHas('categories', function ($query) use ($categoryId) {
                $query->where('category_id', $categoryId);
            })->with('categories', 'images')->get();
        } else {
            $products = Product::with('categories', 'images')->get();
        }

        $categories = Category::all();
        return view('user.page.shop', compact('products', 'categories'));
    }

    public function show(Product $product)
    {
        $product->load('categories', 'images');
        return view('user.page.productDetail', compact('product'));
    }
}
