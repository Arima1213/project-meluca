<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\authAdminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\landingAdminController;
use App\Http\Controllers\transactionController;

Route::get('/login', [authController::class, 'showLogin'])->name('showLogin');
Route::get('/register', [authController::class, 'showRegister'])->name('showRegister');
Route::post('/login', [authController::class, 'login'])->name('login');
Route::post('/register', [authController::class, 'register'])->name('register');
Route::get('/', [landingController::class, 'index'])->name('landing');
Route::get('/aboutus', [landingController::class, 'aboutus'])->name('aboutus');
Route::get('/teams', [landingController::class, 'team'])->name('team');
Route::get('/feedback', [landingController::class, 'feedback'])->name('feedback');
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/products', [shopController::class, 'index'])->name('products');
Route::get('/products/{product}', [shopController::class, 'show'])->name('product.show');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/count', [CartController::class, 'count'])->name('cart.count');
// Route::get('/order/create/{product}', [OrderController::class, 'create'])->name('order.create');

Route::get('/admin/login', [authAdminController::class, 'showLogin'])->name('admin-showLogin');
Route::post('/admin/login', [authAdminController::class, 'login'])->name('admin-login');
Route::get('/admin/logout', [authAdminController::class, 'logout'])->name('admin-logout');

Route::middleware('auth')->group(function () {
    Route::get('/transactions', [transactionController::class, 'index'])->name('transactions');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/get-cities/{provinceId}', [CartController::class, 'getCities']);


    Route::prefix('admin')->group(function () {
        Route::get('/', [landingAdminController::class, 'index'])->name('admin-landing');
        Route::get('/produk', [productsController::class, 'index'])->name('admin-product');
        Route::post('/produk/add', [productsController::class, 'store'])->name('admin-product-add');
        Route::post('/produk/update', [productsController::class, 'update'])->name('admin-product-update');
        Route::post('/produk/delete', [productsController::class, 'destroy'])->name('admin-product-delete');
        Route::get('/categories', [categoryController::class, 'index'])->name('categories.index');
        Route::post('/categories', [categoryController::class, 'store'])->name('categories.store');
        Route::put('/categories/{category}', [categoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}', [categoryController::class, 'destroy'])->name('categories.destroy');
    });
});