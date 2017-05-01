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
