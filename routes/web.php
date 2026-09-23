<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Frontend.index');
// });

Route::get('/', [HomeController::class, 'frontendIndex']);

Auth::routes();

