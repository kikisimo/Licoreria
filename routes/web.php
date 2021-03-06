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

//toy cambiando, esto carlex
Route::get('base1','PageController@base1');

Route::get('sale','PageController@sale');

Route::get('layouts/base0','PageController@base0');


Route::get('base','PageController@base');


Route::get('catalogs','CatalogController@listAll');

//CRUD Productos Lucho
/*Route::get('products','ProductController@listAll');
Route::get('products/create_product','ProductController@create_product');
Route::post('products/save','ProductController@save');
Route::get('products/update','ProductController@update');
Route::get('products/show','ProductController@show');*/

//CRUD Proveedores
Route::resource('priver','CategoryController');
Auth::routes();

/*Route::get('providers/create_providers','ProviderController@create_providers');
Route::post('providers/save','ProviderController@save');
Route::get('providers/update','ProviderController@update');
Route::get('providers/delete','ProviderController@delete');
Route::get('providers/show','ProviderController@show');*/
//CRUD CATEGORIAS de Productos Parte Lucho
Route::resource('categories','CategoryController');
Auth::routes();

//CRUD Tipos de productos Parte Lucho
Route::resource('drinktypes','DrinktypeController');
Auth::routes();


//Rutas para CRUD users (crea todas las routas)
//Route::resource('users', 'UsuarioController');
//Rutas para Productos de WILDE
Route::resource('products', 'ProductController');
Route::resource('providers', 'ProviderController');
Route::resource('clients', 'ClientController');
// ¡?¡?
Auth::routes();
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

//RUTAS RAFASEBASS
Route::get('pruebarafa','UsuarioController@loadView');

Route::post('base','UsuarioController@verify');

Route::get('/register','RegistrationController@register');
Route::post('/register','RegistrationController@postRegister');

Route::get('/login','LoginController@login');
Route::post('/login','LoginController@postLogin');


//TERMINA RUTAS RAFASEBASS
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeprueba', 'HomeController@prueba')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD


Route::get('pdf', 'PdfController@invoice');

=======
>>>>>>> e9b0be5fba7eca40a48787f1cd8e487cdc964f31
