<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function register()
    {
        return view('authentication.register');
    }

    public function postRegister(Request $request)
    {

        dd($request->all());



    }
}
<<<<<<< HEAD
=======

>>>>>>> 8658929cdd951ee33cb5387465aa3eb05ca6c378
