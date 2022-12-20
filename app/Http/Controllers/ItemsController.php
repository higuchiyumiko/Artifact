<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Models\Review;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    
    public function post(items $items)
    {
         return view('posts.post');
    }
    public function search(Request $request)
    {
         $name = $request->input('name');
         
         $query = items::query();

        if(!empty($name)) {
            $query->where('Name', 'LIKE', "%{$name}%");
        }

        $items = $query->get();
         
        return view('posts.search', compact('items','name'));
    }
    public function create(Request $request)
    {
        $data=items::where('id',$request->id)->first();
         return view('posts.create',$data)->with(['data'=>$data]);
         
    }
     public function register(Request $request)
    {
         return view('posts.register');
         
    }
    public function store(Request $request, items $new_item)
{
    $input = $request['item'];
    $new_item->fill($input)->save();
    return redirect('/');
}
    public function store2(Request $request, review $new_review)
{
    $input = $request['review'];
     $data=items::where('id',$request->id)->first();
    $new_review->fill($input)->save();
    return redirect('/');
}
public function show(items $items)
{
    return view('posts/show')->with(['items' => $items->get()]);
 //'post'はbladeファイルで使う変数。中身は$itemsはid=1のitemsインスタンス。
}
public function show2(Review $reviews,items $items)
{
    return view('posts/show2')->with(['reviews' => $reviews->get()])->with(['items' => $items->get()]);
}

}
