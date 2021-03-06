<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Provider;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProviderRequest;
class ProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view ('providers.create');
    }

    public function show()
    {

    }

    public function store(ProviderRequest $request)
    {

        $provider = new Provider();
        =strtoupper ($request)
        $provider -> name = $request ->input('name');
        $provider -> phone = $request ->input('phone');
        $provider -> e_mail = $request ->input('e_mail');
        $provider -> address = $request ->input('address');
        $provider -> observation = $request ->input('observation');
        $provider -> save();
        //$providers = provider::orderBy('cod_prov', 'DESC')->paginate();
        //return view('providers.index', compact('providers'));


        return redirect()->route('providers.index')

            ->with('info', 'El proovedor ha sido guardado correctamente');

    }

    //Parte Wilde
    public function index()
    {
        $providers = Provider::orderBy('cod_prov', 'DESC')->paginate(3);
        return view('providers.index', compact('providers'));
    }

    public function destroy($cod_prov)
    {
        $provider = Provider::find($cod_prov);
        $provider->delete();

        return back()->with('info', 'El proveedor ha sido eliminado correctamente');
    }
    public function edit($cod_prov)
    {
        $provider = Provider::find($cod_prov);
        return view('providers.edit', compact('provider'));
    }

    public function update(ProviderRequest $request, $cod_prov)
    {
        $provider = Provider::find($cod_prov);

        $provider ->name = $request->name;
        $provider ->phone = $request->phone;
        $provider ->e_mail = $request->e_mail;
        $provider ->address = $request->address;
        $provider ->observation = $request->observation;


        $provider ->save();

        return redirect()->route('providers.index')

            ->with('info', 'El proveedor ha sido actualizado');
    }
}

