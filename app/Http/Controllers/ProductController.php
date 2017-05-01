<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    /*public function listAll()
    {
        echo ('hola malasos');
    }*/
    public function listAll()
    {
       $products = Product::all();
       return view('products.listAll',['products'=>$products]);
    }
    public function create_product()
    {
        return view ('products.create_product');
    }
    public function save(Request $request)
    {
        //echo $request -> input('name');
        $product = new Product();
        $product -> name = $request ->input('name');
        $product -> brand = $request ->input('brand');
        $product -> content = $request ->input('content');
        $product -> save();
        $products = Product::all();
        return view('products.listAll',['products'=>$products]);
    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function show()
    {

    }
}
