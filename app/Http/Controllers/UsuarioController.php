<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use App\person;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //metodo index
    public function index()
    {
        $users = person::orderBy('ci_persona', 'DESC')->paginate();
        return view('users.index', compact('users'));
    }
    public function verify(Request $request)
    {



        return view ('base');
    }
    public function loadView()
    {
        return view ('pruebarafa');
    }
}
