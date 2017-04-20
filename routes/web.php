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


<<<<<<< HEAD
Route::get('products','ProductController@listAll');
Route::get('products/create','ProductController@create');
Route::get('products/update','ProductController@update');
Route::get('products/delete','ProductController@delete');
Route::get('products/show','ProductController@show');
//Auth::routes();

//Route::get('/home', 'HomeController@index');
=======
Route::get('/home', 'HomeController@index');


Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
>>>>>>> 401f8d0a99e9091ba6f70e125e627bffcfd6ca75
