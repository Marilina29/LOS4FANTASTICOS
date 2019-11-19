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

/* Route::get('/', function () {
    return view('home');
}); */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/agregoProducto', 'ProductsController@create');

Route::post('/agregoProducto', 'ProductsController@store');

Route::get('/lista-productos', 'ProductsController@index' );

Route::get('/carrito', 'CarritoController@index')->name('carrito')->middleware('auth');
