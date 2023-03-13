<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Review;
use App\Models\items;
//use App\Models\Review;

class ReviewController extends Controller
{
       public function index(Review $review,items $items)
    {
         return view('posts/index')->with(['review' => $review->getPaginateByLimit()])->with(['items' => $items->get()]);
    }
}
