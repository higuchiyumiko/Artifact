<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
         return view('reviews/index')->with(['category' => $category->get()]);
    }
    public function show(Category $category)
    {
         return view('reviews/show')->with(['category'=>$category]);
    }
}

