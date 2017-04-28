<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class UsuarioController extends Controller
{
    //metodo index
    public function index()
    {
        $users = user::orderby('id','DESC')->paginate();
        return view('users.index', compact('users'));
    }
}
