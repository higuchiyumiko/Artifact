<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Models\Review;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Cloudinary; 

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
    $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
  //  dd($image_url);
   
    $input += ['Item_image' => $image_url];
    $new_item->fill($input)->save();
    return redirect('/');
}
    public function cloudinary_store(Request $request)
    {
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        dd($image_url);  //画像のURLを画面に表示
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
        return view('posts/show')->with(['items' => $items->getPaginateByLimit()]);
     //'post'はbladeファイルで使う変数。中身は$itemsはid=1のitemsインスタンス。
    }
    public function show2(Request $request,Review $reviews,items $items)
    {
        $input=request('post');
        $data=Review::find($input);
        return view('posts/show2',compact('data'))->with(['reviews' => $reviews->get()])->with(['items' => $items->get()]);
    }
     public function edit(Request $request,items $items)
    {
       
        $input=$request['id'];
        $data=items::find($input);
        return view('posts/edit',compact('data'))->with(['items' => $items->get()]);
    }
        public function update(Request $request, items $new_items)
    {
        $input = $request['item'];
        $new_items->fill($input)->save();
        return redirect('/');
    }
        public function delete(Request $request,items $items)
    {
        
        $input=$request['id'];
        $data=items::find($input);
        $data->delete();
        return redirect('/');
    }
}
