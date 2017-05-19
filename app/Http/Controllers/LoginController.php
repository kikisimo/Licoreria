<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
        return view ('authentication.login');
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
