<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', HomeController::class)->name('home');

Route::resource('products', ProductController::class);

Route::get('login', LoginController::class)->name('login');
Route::get('logout', LogoutController::class)->name('logout');
Route::get('profile', [ProfileController::class, 'edit'])->name('profile');
