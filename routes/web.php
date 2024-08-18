<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

// Product Routes
Route::resource('products', ProductController::class);

// Category Routes
Route::resource('categories', CategoryController::class);

// Admin Dashboard Route
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth');