<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

}
