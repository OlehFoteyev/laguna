<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $products = Product::where('category_id',$id)
        ->paginate(12);
        return view ('category.index',compact('products'));
    }

    public function show()

    {
       // $product = count(category->product);
        $categories = Category::all();
        return view('category.show',compact('categories','product'));
    }
    public function store(Request $request)
    {
        //dd(request()->all());
        $this->validate(request(),
            [
               'title' => 'required|min:5',
               'short_description' => 'required|min:15',
            ]);

        Category::create(request(['title','short_description','created_at']));
        return redirect ('/admin/category');
    }

    public function create()
    {
        return view('category.create');
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('category.edit',compact('categories'));
    }

    public function update(Request $request,$id)
    {

        $this->validate(request(),
            [
                'title' => 'required|min:5',
                'short_description' => 'required|min:15',
            ]);

        $categories = Category::findOrFail($id);
        $categories->update($request->all());
        return redirect('admin/category');
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect('admin/category');

    }

}
