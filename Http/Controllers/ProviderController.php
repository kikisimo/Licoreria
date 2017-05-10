<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Provider;
use DB;
use Illuminate\Support\Facades\Redirect;
class ProviderController extends Controller
{
    public function create_providers()
    {
        return view ('providers.create_providers');
    }

    public function save(Request $request)
    {

        $provider = new Provider();
        $provider -> name = $request ->input('name');
        $provider -> phone = $request ->input('phone');
        $provider -> e_mail = $request ->input('e_mail');
        $provider -> address = $request ->input('address');
        $provider -> observation = $request ->input('observation');
        $provider -> save();
        $providers = provider::orderBy('cod_prov', 'DESC')->paginate();
        return view('providers.index', compact('providers'));
    }
}
