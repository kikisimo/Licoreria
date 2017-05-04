<?php

namespace App\Http\Controllers;
use App\user;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
       $users = user::orderby('id','DESC')->paginate();
       return view('users.index', compact('users'));
    }
    public function verify()
    {

        $users = User::where('gender', 'f')
            ->get(['id', 'name', 'biography']);

    }


}
