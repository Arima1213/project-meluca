<?php

namespace App\Http\Controllers;

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
}