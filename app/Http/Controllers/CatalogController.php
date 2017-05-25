<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\catalog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
public function listAll()
    {
      echo ('hola mundo');
    }
}

