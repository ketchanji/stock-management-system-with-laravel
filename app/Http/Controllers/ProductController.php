<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ProductController extends Controller
{
    // public function index(){
    //     $products = Product::with('category')->get();
    //     $categories = Category::with('products')->get();
    //     return view('dashboards.all-stock', compact('products', 'categories'));
    // }

    public function create()
    {
        $products = Product::with('category')->get();
        $categories = Category::with('products')->get();
        return view('dashboards.all-stock', compact('products', 'categories'));
    }

    public function show()
    {
        $products = Product::with('category')->get();
        $categories = Category::with('products')->get();
        return view('dashboards.category', compact('products', 'categories'));
    }

    public function keep(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect()->back()->with('status', 'Category created successfully');
    }


    public function store(Request $request)
    {
        $product = new product;
        $product->product_name = $request->input('product_name');
        $product->product_status = $request->input('product_status');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_quantity = $request->input('product_quantity');
        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->storeAs('public/images', $filename);
            $product->product_image = $filename;
        }
        $product->save();
        return redirect()->back()->with('status', 'product added successfully');
    }

    public function edit_function($id)
    {
        $products = DB::select('select * from products where id = ?', [$id]);
        return view('/all-stock',['product'=>$products]);
    }

    public function update_function(Request $request,$id)
    {
        $product_name = $request->input('product_name');
        $product_status = $request->input('product_status');
        $product_price = $request->input('product_price');
        $product_category = $request->input('product_category');
        $product_quantity = $request->input('product_quantity');
        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->storeAs('public/images', $filename);
            $product_image = $filename;
        }

        DB::update('update products set product_name = ?, product_status = ?, product_price = ?, product_category = ?, product_quantity = ?, product_image = ? where id = ?', [$product_name, $product_status, $product_price, $product_category, $product_quantity, $product_image, $id]);

        return redirect()->back()->with('update', 'product updated added successfully');
    }


    public function delete_function($id)
    {
        DB::delete('delete from products where id = ?', [$id]);
        return redirect('all-stock')->with('success','Product Delete successfully.');
    }

    public function destroy_function($id)
    {
        DB::delete('delete from categories where id = ?', [$id]);
        return redirect('category')->with('success','Category Delete successfully.');
    }
}
