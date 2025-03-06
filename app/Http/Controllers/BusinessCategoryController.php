<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessCategory;

class BusinessCategoryController extends Controller
{

    public function home()
    {
        return view('admin.adminHome');
    }

    public function index()
    {
        $categories = BusinessCategory::all();
        return view('admin.categories', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:business_categories|max:255']);
        BusinessCategory::create(['name' => $request->name]);

        return redirect('/admin/categories')->with('success', 'Category added successfully!');
    }

    public function showprofile()
    {
        return view('admin.profile');
    }

    public function signupdetails()
    {
        return view('admin.signupdetails');
    }


    
}

