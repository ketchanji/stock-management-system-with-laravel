<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

   public function show(){
        $data=Product::all();
        view('dashboards.worker.all-stock')->with(['product' => $data]);
    }

    public function create()
    {
        return view('dashboards.worker.all-stock');
    }

    public function store(Request $request)
    {
        $product = new product;
        $product->product_name = $request->input('product_name');
        $product->product_status = $request->input('product_status');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_quantity = $request->input('product_quantity');
        if($request->hasfile('product_image'))
        {
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extention;
            $file->move('uploads/product', $filename);
            $product->product_image = $filename;
        }
        $product->save();
        return redirect()->back()->with('status', 'product image added successfully');
    }

}
