<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //Parte Lucho
    public function listAll()
    {
       /* $products = category::all();
        return view('products.listAll',['products'=>$products]);*/
    }
    public function create()
    {
        return view ('categories.create');
    }
    public function save_categories(Request $request)
    {
        //echo $request -> input('name');
        $category = new Category();
        $category -> name = $request ->input('name');
        $category -> description = $request ->input('description');
        $category-> save_categories();

        /*$products = Product::orderBy('cod_prod', 'DESC')->paginate();
        return view('products.index', compact('products'));*/
    }
}
