<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductRequest;

use App\Client;




class SaleProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $client = Client::all();

        return view('sales.create', compact('sales'));
    }
}
