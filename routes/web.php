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
    return view('base');
});

Route::get('catalogs','CatalogController@listAll');

//CRUD Altas Productos Lucho
Route::get('products','ProductController@listAll');
Route::get('products/create_product','ProductController@create_product');

Route::post('products/save','ProductController@save');
Route::get('products/update','ProductController@update');
Route::get('products/delete','ProductController@delete');
Route::get('products/show','ProductController@show');

//CRUD Proveedores
Route::get('providers/create_providers','ProviderController@create_providers');
Route::post('providers/save','ProviderController@save');
Route::get('providers/update','ProviderController@update');
Route::get('providers/delete','ProviderController@delete');
Route::get('providers/show','ProviderController@show');
//CRUD CATEGORIAS Parte Lucho
Route::resource('categories','CategoryController');
Auth::routes();

//CRUD Tipos de Bebida Parte Lucho
Route::resource('drinktypes','DrinktypeController');
Auth::routes();


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

Route::get('/register','RegistrationController@register');
Route::post('/register','RegistrationController@postRegister');

Route::get('/login','LoginController@login');
Route::post('/login','LoginController@postLogin');


//TERMINA RUTAS RAFASEBASS