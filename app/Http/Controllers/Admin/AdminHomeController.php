<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller


{

    //  Home page for admin dashboard
    public function index()
    {
        // fatch all categry data from database
       
        return view('Admin.AdminDashboard.index');
    }

    // Admin Product Category page
    public function categories()
    {
         $categories = Category::latest()->get();
        return view('Admin.AdminProduct.adminProduct' , compact('categories'));
    }

    //  storeCategory 
    public function storeCategory(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'category' => 'nullable',
            'slug' => 'nullable',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'description' => 'nullable|string',
        ]);

    

        // Store the category in the database (assuming you have a Category model)
        Category::create([
            'category' => $request->category,
            'slug' => $request->slug,
            'category_image' => $request->category_image,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }

    
}
