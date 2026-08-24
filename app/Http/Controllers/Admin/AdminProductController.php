<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StoreProduct;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function formProduct($id = null)
    {
        // this is edit product form page
        $editProduct = $id ? StoreProduct::find($id) : null;
        return view('Admin.AdminProduct.AdminProductForm', compact('editProduct'));
    }

    // All Products page 
    public function allProducts(){
        $products = StoreProduct::latest()->get();
        return view('Admin.AdminProduct.AllProducts', compact('products'));
    }

    public function storeProduct(Request $request, $id = null){

     dd($request->all());    
        // Logic for storing product
        $request->validate([
            'product_name' => 'required',
            'product_slug' => 'nullable',
            // 'category_id' => 'required|exists:categories,id',
            // 'brand_id' => 'required|exists:brands,id',
            'product_price' => 'required',
            'sale_price' => 'required',
            'sku' => 'nullable',
            'quantity' => 'required',
            'short_description'=> 'nullable',
            'description'=> 'nullable',
            'status' => 'required|in:1,0',
            'featured' => 'nullable|in:1,0',
            'tranding' => 'nullable|in:1,0',
            'product_image' => 'nullable', 
        ]);

        // image upload logic
      if('product_image') 

        StoreProduct::updateOrCreate([
            'id' => $id, 
        ],
        [
            'product_name' => $request->product_name,
            'product_slug' => $request->product_slug,
            'product_price' => $request->product_price,
            'sale_price' => $request->sale_price,
            'sku' => $request->sku,
            'quantity' => $request->quantity,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'status' => $request->status,
            'featured' => $request->featured,
            'tranding' => $request->tranding,
            'product_image' => $request->product_image,
        ]);

      $msg = $id ? 'Product updated successfully.' : 'Product created successfully.';
        return redirect()->back()->with('msg', 
    [
        'type' => 'success',
        'content' => $msg
    ]);
        // return redirect()->route('form.product')->with('success', 'Product created successfully.');
    }
}
