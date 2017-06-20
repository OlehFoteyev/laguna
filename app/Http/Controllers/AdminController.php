<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $products = Product::paginate(12);
        return view('admin.index',compact('products'));
    }




}
