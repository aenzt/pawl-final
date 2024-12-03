<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/csrf', function () {
    return csrf_token();
});

Route::post('/payment', [PaymentController::class, 'charge']);

// Route untuk Menu
Route::prefix('menus')->group(function () {
    Route::get('/', [MenuController::class, 'index']);
    Route::post('/', [MenuController::class, 'store']);
    Route::get('/{menu}', [MenuController::class, 'show']);
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