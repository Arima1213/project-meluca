<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\shopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [landingController::class, 'index'])->name('landing');
Route::get('/shop', [shopController::class, 'index'])->name('shop');
Route::get('/about', [landingController::class, 'about'])->name('about');
Route::get('/login', [authController::class, 'showLogin'])->name('showLogin');
Route::get('/register', [authController::class, 'showRegister'])->name('showRegister');
Route::post('/login', [authController::class, 'login'])->name('login');
Route::post('/register', [authController::class, 'register'])->name('register');
Route::get('/profile', [landingController::class, 'profile'])->name('profile');
Route::get('/logout', [landingController::class, 'logout'])->name('logout');
