<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', [ProductController::class, 'categories']);
Route::get('/products/all', [ProductController::class, 'fetchAllProducts']);
Route::get('/products/{ids}', [ProductController::class, 'fetchProducts']);
Route::get('/products-by-category/{slug}', [ProductController::class, 'fetchProductsByCategory']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product-by-slug/{slug}', [ProductController::class, 'showBySlug']);
Route::get('/product-by-id/{id}', [ProductController::class, 'showById']);
