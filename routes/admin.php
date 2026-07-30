<?php

use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;



Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');