<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function sale()
    {
        return view ('sale');
    }

    public function base1()
    {
        return view ('base1');
    }

}
