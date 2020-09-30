<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productcontroller extends Controller
{
    public function index(){
        $products = product::inRandomOrder()->take(11)->get();

        return view('products')->with('products',$products);
    
    }

    public function show($id){
        $product= product::where('id',$id)->firstOrFail();

        return view('product')->with('product',$product);
    }
}
