<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use DB;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    /*public function listAll()
    {
        echo ('hola malasos');
    }*/
    public function listAll()
    {
        $products = Product::all();
        return view('products.listAll',['products'=>$products]);
    }
    public function create_product()
    {
        return view ('products.create_product');
    }
    #Parte Lucho
    public function save(Request $request)
    {
        //echo $request -> input('name');
        $product = new Product();
        $product -> name = $request ->input('name');
        $product -> brand = $request ->input('brand');
        $product -> content = $request ->input('content');
        $product -> due_date = $request ->input('due_date');
        $product -> save();
        /*$products = Product::all();
        return view('products.listAll',['products'=>$products]);*/
        $products = Product::orderBy('cod_prod', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }
    /*public function update()
    {
    }
    public function delete()
    {
        $products = Product::orderBy('cod_prod', 'DESC')->paginate();
        return view('products.bajas', compact('products'));

    }
    public function show()
    {
    }*/
    //Parte Wilde
    public function index()
    {
        $products = Product::orderBy('cod_prod', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    //Parte Wilde DELETE

    //Parte Wilde
    public function destroy($cod_prod)
    {
        $product = Product::find($cod_prod);
        $product->delete();

        return back()->with('info', 'El producto ha sido eliminado correctamente');
    }
}