<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class)->name('home');

Route::resource('products', ProductController::class);

Route::get('login', LoginController::class)->name('login');
