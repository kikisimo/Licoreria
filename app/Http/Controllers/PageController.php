<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Drinktype;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductRequest;

class PageController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sale()
    {
        return view ('sale');
    }

    public function base1()
    {
        return view ('base1');
    }

}
