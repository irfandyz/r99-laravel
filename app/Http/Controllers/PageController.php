<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function modern(){
        $type = "Modern";
        $data = Category::where('type','Modern')->with('product')->paginate(12);
        return view('category',compact('data','type'));
    }
    public function natural(){
        $type = "Natural";
        $data = Category::where('type','Natural')->with('product')->paginate(12);
        return view('category',compact('data','type'));
    }
    public function product(request $request){
        $data = null;
        $category = null;
        if ($request->category) {
            $category = Category::where('name',$request->category)->first();
            $data = Product::where('category_id',$category->id)->paginate(12);
            if ($data->count() == 0) {
                $data = null;
            }
        }
        return view('product',compact('data','category','request'));
    }
}
