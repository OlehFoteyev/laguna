<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $products = Product::where('category_id', $id)->latest(4);
        $product = Product::findOrFail($id);
        return view('product.index', compact('product', 'products'));
    }

    public function sortByProductsDesc()
    {
        $products = DB::table('products')
            ->orderBy('title', 'asc')
            ->paginate(6);
        return view('index', compact('products'));

    }

    public function sortByPriceDesc()
    {
        $products = DB::table('products')
            ->orderBy('price', 'Desc')
            ->paginate(6);
        return view('index', compact('products'));

    }

    public function sortByPriceAsc()
    {
        $products = DB::table('products')
            ->orderBy('price', 'asc')
            ->paginate(6);
        return view('index', compact('products'));

    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request)
    {
        //dd(request()->all());

        $this->validate(request(),
            [
                'title' => 'required|min:5',
                'description' => 'required|min:15',
                'title_img' => 'required',
                'price' => 'required',
            ]);

        Product::create(request([
            'title','description','title_img','price','category_id','created_at'
        ]));

        return redirect('/admin');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('product.edit',compact('products'));
    }

    public function update($id,Request $request)
    {
        $this->validate(request(),
            [
                'title' => 'required|min:5',
                'description' => 'required|min:15',
                'title_img' => 'required',
                'price' => 'required',
            ]);

        $products = Product::findOrFail($id);
        $products->update($request->all());
        return redirect ('admin');
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('admin');
    }
}
