<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        if(request()->has('title')) {
            $products = Product::where('title',request('title'))->paginate(6)
            ->appends('title',request('title'));
        }else
            $products = Product::where('price','<','100')
            ->paginate(12);
        return view('index',compact('products'));
    }
}
