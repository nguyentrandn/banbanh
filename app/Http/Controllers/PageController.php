<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;

class PageController extends Controller
{
    public function getIndex(){
        $slides=Slide::all();// lay ra het tat ca
        $all_pr = Product::all(); 
        $new_product = Product::where('new', 1) -> get();// lay ra 1 sp
        return view('banhang.index',compact('slides' , 'new_product', 'all_pr'));
    }
    public function show($id){
    	$sanpham = Product::where('id', $id)->first();
    	return view('banhang.product_super', compact('sanpham'));
    }
}
