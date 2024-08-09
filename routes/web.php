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
Route::get('/transactions', [productsController::class, 'index'])->name('transactions');
Route::middleware('auth')->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [landingAdminController::class, 'index'])->name('admin-landing');
        Route::get('/login', [authAdminController::class, 'showLogin'])->name('admin-showLogin');
        Route::post('/login', [authAdminController::class, 'login'])->name('admin-login');
        Route::get('/logout', [landingAdminController::class, 'logout'])->name('admin-logout');
        Route::get('/produk', [productsController::class, 'index'])->name('produk');
        Route::post('/produk/add', [productsController::class, 'simpan'])->name('add-produk');
        Route::post('/produk/update', [productsController::class, 'update'])->name('update-produk');
        Route::post('/produk/delete', [productsController::class, 'destroy'])->name('delete-produk');
    });
});