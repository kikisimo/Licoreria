<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //Parte Lucho CRUD

    public function index()
    {
        $categories = Category::orderBy('cod_cat', 'DESC')->paginate();
        return view('categories.index', compact('categories'));
    }
    public function delete()
    {

    }
    public function show($cod_cat)
    {
       /* $category = Category::find($cod_cat);
        return view('categories.show', compact('category'));*/
    }
    public function listAll()
    {

    }
    public function create_product()
    {
        return view ('categories.create');
    }
}
