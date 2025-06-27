<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function(){
    Route::post('products', [ProductController::class, 'store'])->name('api.products.store');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('api.products.destroy');
});
