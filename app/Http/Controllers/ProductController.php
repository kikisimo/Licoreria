<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Drinktype;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        $drinktypes = Drinktype::all();
        $categories = Category::all();
        return view('products.create', compact('categories'), compact('drinktypes'));
    }
    //Parte Lucho
    public function store(ProductRequest $request)
    {

        $product = new Product;

        $product ->name = $request->input('name');
        $product ->brand = $request->brand;
        $product ->content = $request->content;
        $product ->stock = $request->stock;
        $product ->price = $request->price;
        $product ->due_date = $request->due_date;
        $product ->cod_cat = $request->cod_cat;
        $product ->cod_dt = $request->cod_dt;

        $product ->save();
        //Product::create($request->all());

        return redirect()->route('products.index')

            ->with('info', 'El producto ha sido guardado correctamente');


    }

    public function show()
    {

    }
    //Parte Wilde
    public function index(Request $request)
    {
        $products = Product::search($request->name)->orderBy('cod_prod', 'DESC')->paginate(3);
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

        $categories = Category::all();
        $drinktypes = Drinktype::all();
        $product = Product::find($cod_prod);
        return view('products.edit', compact('product'), compact('categories'), compact('drinktypes'));
    }
    public function update(ProductRequest $request, $cod_prod)
    {

       $product = Product::find($cod_prod);


        $product ->name = $request->name;
        $product ->brand = $request->brand;
        $product ->content = $request->content;
        $product ->stock = $request->stock;
        $product ->price = $request->price;
        $product ->due_date = $request->due_date;
        $product ->cod_cat = $request->cod_cat;
        //$product ->cod_dt = $request->cod_dt;

        $product ->save();

        //Product::update($request->all());

        return redirect()->route('products.index')

            ->with('info', 'El producto fue actualizado');
    }
}
