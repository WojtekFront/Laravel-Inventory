<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/shops', [ShopController::class, 'index'])->name('shops.index');

Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/products/export', [ProductController::class, 'export'])->name('products.export');
    Route::resource('shops', ShopController::class)->only(['index','create', 'store']);
});

require __DIR__.'/auth.php';


