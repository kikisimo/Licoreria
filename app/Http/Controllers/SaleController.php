<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sale;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SaleRequest;
class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


   

}