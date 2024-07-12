<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index()
    {
        // Mengambil seluruh data produk beserta gambar dan kategori
        $products = Product::with(['images', 'categories'])->get();

        // Mengirim data ke view
        return view('products.index', compact('products'));
    }
}
