<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{


    public function create()
    {
        return view('products.create');
    }
    //Parte Lucho
    public function store(ProductRequest $request)
    {
        $product = new Product;

        $product ->name = $request->name;
        $product ->brand = $request->brand;
        $product ->content = $request->content;
        $product ->due_date = $request->due_date;

        $product ->save();

        return redirect()->route('products.index')

            ->with('info', 'el Producto fue Guardado');


    }

    public function show()
    {

    }
    //Parte Wilde
    public function index()
    {
        $products = Product::orderBy('cod_prod', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function destroy($cod_prod)
    {
        $product = Product::find($cod_prod);
        $product->delete();

        return back()->with('info', 'El producto ha sido eliminado correctamente');
    }
    public function edit($cod_prod)
    {
        $product = Product::find($cod_prod);
        return view('products.edit', compact('product'));
    }
    public function update(ProductRequest $request, $cod_prod)
    {
        $product = Product::find($cod_prod);

        $product ->name = $request->name;
        $product ->brand = $request->brand;
        $product ->content = $request->content;

        $product ->save();

        return redirect()->route('products.index')

            ->with('info', 'El producto fue actualizado');
    }
}
