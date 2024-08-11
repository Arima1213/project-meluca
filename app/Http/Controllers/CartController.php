<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Ambil cart milik user yang sedang login
        $cart = ShoppingCart::where('user_id', Auth::id())->with('cartItems.product')->first();

        return view('cart.index', compact('cart'));
    }

    public function add(Product $product)
    {
        $cartItem = new CartItem();
        $cartItem->product_id = $product->id;
        $cartItem->user_id = auth()->id();
        $cartItem->quantity = 1;
        $cartItem->save();

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
