<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('login');
});
Route::get('base', function () {
    //$sesion = Sesion::usuario('administrador')->first();

    return view('base')/*->with('sesion',$sesion->nombre)*/;
});

Route::get('catalogs','CatalogController@listAll');

//CRUD Altas Productos
Route::get('products','ProductController@listAll');
Route::get('products/create_product','ProductController@create_product');
Route::post('products/save','ProductController@save');
Route::get('products/update','ProductController@update');
Route::get('products/delete','ProductController@delete');
Route::get('products/show','ProductController@show');
//Auth::routes();

/*
Route::get('products','ProductController@listAll');
Route::get('products/create','ProductController@create');
Route::get('products/update','ProductController@update');
*/
/*Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
*/
//Route::get('/home', 'HomeController@index');

/*
Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
*/

//Rutas para CRUD users (crea todas las routas)
//Route::resource('users', 'UsuarioController');
//Rutas para Productos de WILDE
Route::resource('products', 'ProductController');
// ¡?¡?
Auth::routes();
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

//RUTAS RAFASEBASS
Route::get('Login','UsuarioController@loadView');

Route::post('base','UsuarioController@verify');


//TERMINA RUTAS RAFASEBASS