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
        if (!auth()->check()) {
            return redirect()->route('login')->with('alert', [
                'type' => 'warning',
                'title' => 'Warning!',
                'message' => 'Please login to add products to your cart.'
            ]);
        }

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

        return redirect()->back()->with('alert', [
            'type' => 'success',
            'title' => 'Success!',
            'message' => 'Product added to cart successfully!'
        ]);
    }

    public function count()
    {
        $count = 0;

        if (auth()->check()) {
            $count = CartItem::where('user_id', auth()->id())
                ->where('is_checked_out', false)
                ->sum('quantity');
        }

        return response()->json(['count' => $count]);
    }
}