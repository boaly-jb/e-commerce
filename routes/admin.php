<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use Illuminate\Support\Facades\Route;



Route::get('/home', [AdminHomeController::class, 'index'])->name('home');


// Admin Dashboard Route
Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');



// ! Admin Product Route Group
// Admin product Category Route
Route::get('/categories/{id?}', [AdminHomeController::class, 'categories'])->name('categories');
// store category route
Route::post('/store/category/{id?}', [AdminHomeController::class, 'storeCategory'])->name('store.category');
// Product Form Route
Route::get('/from/product/{id?}', [AdminProductController::class, 'formProduct'])->name('form.product');
// Product Store Route
Route::post('/store/product/{id?}', [AdminProductController::class, 'storeProduct'])->name('store.product');
// All Product Route
Route::get('/products', [AdminProductController::class, 'allProducts'])->name('products');


