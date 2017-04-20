<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*public function listAll()
    {
        echo ('hola malasos');
    }*/
    public function listAll()
    {
       //$products = product::all();
        return view('products.listAll');
    }
    public function create()
    {

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
