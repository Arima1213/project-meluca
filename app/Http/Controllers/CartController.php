<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function index()
    {
        // Ambil semua item di cart milik user yang sedang login
        $cartItems = CartItem::where('user_id', Auth::id())
            ->with('product')
            ->where('is_checked_out', false)
            ->get();

        // Ambil data provinsi dari cache atau API
        $provinces = Cache::remember('provinces', 60 * 60 * 24, function () {
            $response = Http::withHeaders([
                'key' => '3de2990b5e0f079607d4e3cb406132b9',
            ])->get('https://api.rajaongkir.com/starter/province');

            if ($response->successful()) {
                return $response->json()['rajaongkir']['results'];
            }

            return [];
        });

        return view('user.page.cart', compact('cartItems', 'provinces'));
    }

    public function getCities($provinceId)
    {
        $cities = Cache::remember('cities_' . $provinceId, 60 * 60 * 24, function () use ($provinceId) {
            $response = Http::withHeaders([
                'key' => '3de2990b5e0f079607d4e3cb406132b9',
            ])->get('https://api.rajaongkir.com/starter/city', [
                'province' => $provinceId
            ]);

            if ($response->successful()) {
                return $response->json()['rajaongkir']['results'];
            }

            return [];
        });

        return response()->json($cities);
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