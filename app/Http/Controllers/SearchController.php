<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->input('s');
        $products = Product::latest()
            ->search($s)
            ->paginate(6);
        return view('search.index',compact('products','s'));
    }
}
