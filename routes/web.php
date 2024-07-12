<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [landingController::class, 'index'])->name('landing');
Route::get('/login', [authController::class, 'showLogin'])->name('showLogin');
Route::get('/register', [authController::class, 'showRegister'])->name('showRegister');
Route::post('/login', [authController::class, 'login'])->name('login');
Route::post('/register', [authController::class, 'register'])->name('register');
Route::get('/logout', [landingController::class, 'logout'])->name('logout');

Route::get('/products', [productsController::class, 'index'])->name('products');
Route::get('/transactions', [productsController::class, 'index'])->name('transactions');

Route::get('/admin/', [landingController::class, 'index'])->name('admin-landing');
Route::get('/admin/login', [authController::class, 'showLogin'])->name('admin-showLogin');
Route::post('/admin/login', [authController::class, 'login'])->name('admin-login');
Route::get('/admin/logout', [landingController::class, 'logout'])->name('admin-logout');
