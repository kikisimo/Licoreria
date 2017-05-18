<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //Parte Lucho CRUD

    public function index()
    {
        $categories = Category::orderBy('cod_cat', 'DESC')->paginate();
        return view('categories.index', compact('categories'));
    }

    public function show($cod_cat)
    {
        $category = Category::find($cod_cat);
        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view ('categories.create');
    }
    public function store(CategoryRequest $request)
    {
        $category = new Category;

        $category->category = $request->category;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('categories.index')

            ->with('info', 'La Categoria fue Creado');
    }
    public function edit($cod_cat)
    {
        $category = Category::find($cod_cat);
        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $cod_cat)
    {
        $category = Category::find($cod_cat);

        $category->category = $request->category;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('categories.index')

                     ->with('info', 'La Categoria fue actualizada');
    }
    public function destroy($cod_cat)
    {
        $category = Category::find($cod_cat);
        $category->delete();

        return back()->with('info', 'La Categoria fue eliminada');
    }
}
