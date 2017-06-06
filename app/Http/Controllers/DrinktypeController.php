<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drinktype;
use App\Http\Requests\DrinktypeRequest;
use DB;
use Illuminate\Support\Facades\Redirect;

class DrinktypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Parte Lucho CRUD

    public function index()
    {
        $drinktypes = Drinktype::orderBy('cod_dt', 'DESC')->paginate(3);
        return view('drinktypes.index', compact('drinktypes'));
        //return 'index';
    }


    public function create()
    {
        return view('drinktypes.create');
    }

    public function store(DrinktypeRequest $request)
    {
        $drinktype = new Drinktype;

        $drinktype->type = $request->type;
        $drinktype->description = $request->description;

        $drinktype->save();

        return redirect()->route('drinktypes.index')

            ->with('info', 'El tipo de bebida ha sido creada correctamente');
    }

    public function update(CategoryRequest $request, $cod_dt)
    {
        $drinktype = Drinktype::find($cod_dt);

        $drinktype ->type = $request->type;
        $drinktype ->description = $request->description;

        $drinktype ->save();

        return redirect()->route('drinktypes.index')

            ->with('info', 'El tipo de bebida ha sido actualizada');
    }

    public function show($cod_dt)
    {
        $drinktype = Drinktype::find($cod_dt);
        return view('drinktypes.show', compact('drinktype'));
    }

    public function destroy($cod_dt)
    {
        $drinktype = Drinktype::find($cod_dt);
        $drinktype->delete();

        return back()->with('info', 'El tipo de bebida ha sido eliminada');
    }

    public function edit($cod_dt)
    {
        $drinktype = Drinktype::find($cod_dt);
        return view('drinktypes.edit', compact('drinktype'));
    }
}
