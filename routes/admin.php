<?php

use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;



Route::get('/home', [AdminHomeController::class, 'index'])->name('home');


// Admin Dashboard Route
Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
// Admin product Category Route
Route::get('/categories', [AdminHomeController::class, 'categories'])->name('categories');
// store category route
Route::post('/store/category', [AdminHomeController::class, 'storeCategory'])->name('store.category');