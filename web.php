<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'showproducts'])->name('products');
Route::get('/add-product', [ProductController::class, 'addproduct'])->name('addproduct');
Route::get("/products/delete/{id}", [ProductController::class, "delete"]);
Route::get("/products/new", [ProductController::class, "newProduct"]);
Route::post("/products/save", [ProductController::class, "saveProduct"]);