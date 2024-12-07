<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/csrf', function () {
    return csrf_token();
});

Route::post('/payment', [PaymentController::class, 'charge']);

// Route untuk Menu
Route::prefix('menus')->group(function () {
    Route::post('/', [MenuController::class, 'store']);
    Route::get('/', [MenuController::class, 'show']);
    Route::put('/{menu}', [MenuController::class, 'update']);
    Route::delete('/{menu}', [MenuController::class, 'destroy']);
    
    // Route khusus untuk filter
    Route::get('/category/{category}', [MenuController::class, 'menusByCategory']);
});

// Route untuk Category
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/{category}', [CategoryController::class, 'show']);
    Route::put('/{category}', [CategoryController::class, 'update']);
    Route::delete('/{category}', [CategoryController::class, 'destroy']);
    
    // Route untuk mendapatkan menu berdasarkan kategori
    Route::get('/{category}/menus', [CategoryController::class, 'categoryMenus']);
});