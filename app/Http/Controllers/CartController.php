<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Ambil semua item di cart milik user yang sedang login
        $cartItems = CartItem::where('user_id', Auth::id())
            ->with('product')
            ->where('is_checked_out', false)
            ->get();
        return view('user.page.cart', compact('cartItems'));
    }

    public function add(Product $product)
    {
        $cartItem = CartItem::firstOrCreate(
            [
                'product_id' => $product->id,
                'user_id' => auth()->id(),
                'is_checked_out' => false,
            ],
            ['quantity' => 1]
        );

        if (!$cartItem->wasRecentlyCreated) {
            $cartItem->increment('quantity');
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
