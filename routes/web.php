<?php

use App\Http\Controllers\authAdminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\landingAdminController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [authController::class, 'showLogin'])->name('showLogin');
Route::get('/register', [authController::class, 'showRegister'])->name('showRegister');
Route::post('/login', [authController::class, 'login'])->name('login');
Route::post('/register', [authController::class, 'register'])->name('register');
Route::get('/', [landingController::class, 'index'])->name('landing');
Route::get('/aboutus', [landingController::class, 'aboutus'])->name('aboutus');
Route::get('/teams', [landingController::class, 'team'])->name('team');
Route::get('/feedback', [landingController::class, 'feedback'])->name('feedback');
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/products', [productsController::class, 'index'])->name('admin-product');
Route::post('/products', [productsController::class, 'simpan'])->name('simpan-produk');
Route::post('/product/edit/{product}', [productsController::class, 'edit'])->name('edit-produk');
Route::get('/transactions', [productsController::class, 'index'])->name('transactions');

Route::middleware('auth')->group(function () {
    Route::get('/admin/', [landingAdminController::class, 'index'])->name('admin-landing');
    Route::get('/admin/login', [authAdminController::class, 'showLogin'])->name('admin-showLogin');
    Route::post('/admin/login', [authAdminController::class, 'login'])->name('admin-login');
    Route::get('/admin/logout', [landingAdminController::class, 'logout'])->name('admin-logout');
    Route::get('/admin/produk', [landingAdminController::class, 'produk'])->name('admin-produk');
});