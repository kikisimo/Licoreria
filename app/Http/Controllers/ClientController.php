<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests\ClientRequest;
use DB;
use Illuminate\Support\Facades\Redirect;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view ('clients.create');
    }

    public function show()
    {

    }

    public function store(ClientRequest $request)
    {

        $client = new Client();
        $client -> name = $request ->input('name');
        $client -> lastname = $request ->input('lastname');
        $client -> nit = $request ->input('nit');
        $client -> phone = $request ->input('phone');
        $client -> e_mail = $request ->input('e_mail');
        $client -> save();

        return redirect()->route('clients.index')

            ->with('info', 'El cliente ha sido registrado correctamente');

    }

    //Parte Wilde
    public function index(Request $request)
    {
        $clients = Client::search($request->nit)->orderBy('nit', 'DESC')->paginate(3);
        return view('clients.index', compact('clients'));
    }
    public function destroy($ci_client)
    {
        $client = Client::find($ci_client);
        $client->delete();

        return back()->with('info', 'El cliente ha sido eliminado correctamente');
    }
    public function edit($ci_client)
    {
        $client = Client::find($ci_client);
        return view('clients.edit', compact('client'));
    }

    public function update(ClientRequest $request, $ci_client)
    {
        $client = Client::find($ci_client);
        $client -> name = $request ->input('name');
        $client -> lastname = $request ->input('lastname');
        $client -> nit = $request ->input('nit');
        $client -> phone = $request ->input('phone');
        $client -> e_mail = $request ->input('e_mail');
        $client -> save();

        return redirect()->route('clients.index')

            ->with('info', 'El cliente ha sido actualizado');
    }
}
