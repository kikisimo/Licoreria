<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
class UsuarioController extends Controller
{
    //metodo index
    public function index()
    {
        $users = person::orderBy('ci_persona', 'DESC')->paginate();
        return view('users.index', compact('users'));
    }
}
