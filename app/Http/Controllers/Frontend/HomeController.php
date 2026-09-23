<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function frontendIndex()
    {
        $categories = Category::get()->where('status', 1);
        return view('Frontend.index', compact('categories'));
    }
}
