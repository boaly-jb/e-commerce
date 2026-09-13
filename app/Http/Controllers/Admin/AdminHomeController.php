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
    public function categories($id = null)
    {
        $editCategory = $id ? Category::find($id) : null;

        $categories = Category::latest()->get();
        return view('Admin.AdminProduct.productAdd' , compact('categories', 'editCategory'));
    }

    //  storeCategory 
    public function storeCategory(Request $request , $id = null)
    {

        // Validate the incoming request data
        $request->validate([
            'category' => 'required',
            'slug' => 'nullable',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'description' => 'nullable|string',
            'status' => 'nullable|in:1,0',
        ]);

        $id = $id ?? $request->id;

        //  Category Image Logic
        $oldCategoryImage = $id ? Category::find($id)->category_image : null;
        $categoryImage = $request->hasFile('category_image') ? $request->file('category_image')->store('categories', 'public') : null;

        // Store the category in the database (assuming you have a Category model)
        Category::updateOrCreate(
            ['id' => $id],
            [
                'category' => $request->category,
                'slug' => $request->slug,
                'description' => $request->description,
                'status' => $request->status,
                'category_image' => $categoryImage, 
        ]);

        return redirect()->back()->with( 'msg',
           [
             'type' => 'success', 
            'content' => 'Category created successfully!' 
            ]
        );
    }

    
}
