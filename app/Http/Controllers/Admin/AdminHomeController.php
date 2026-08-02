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
        return view('Admin.AdminDashboard.index');
    }

    // Admin Product Category page
    public function categories()
    {
        return view('Admin.AdminProduct.adminProduct');
    }

    //  storeCategory 
    public function storeCategory(Request $request)
    {

    //  dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'category' => 'required',
            'slug' => 'nullable',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'description' => 'nullable|string',
        ]);

       

        // Handle the uploaded image if it exists
        if ($request->hasFile('category_image')) {
            $imagePath = $request->file('category_image')->store('categories', 'public');
        } else {
            $imagePath = null; // or set a default image path if needed
        }

        // Store the category in the database (assuming you have a Category model)
        Category::create([
            'category' => $request->category_name,
            'slug' => $request->slug,
            'category_image' => $imagePath,
            'description' => $request->description,
        ]);

        // return redirect()->back();
    }
}
