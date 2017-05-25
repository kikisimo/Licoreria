<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Sentinel;
uae Illuminate\Auth\Middleware\Authenticate;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function prueba()
    {
        return view ('pruebarafa');
    }
    public function postLogin(Request $request)
    {
       $usuario= Sentinel::authenticate($request->all());
       if ($usuario==true)
       {
           return view ('base');
       }
       else
       {
           return view ('authentication.loginFail');

       }
        return Sentinel::check();
    }
}
