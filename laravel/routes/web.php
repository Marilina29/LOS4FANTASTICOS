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

Route::get('/agregoProducto', 'ProductsController@create')->middleware('auth')->middleware('roles');

Route::post('/agregoProducto', 'ProductsController@store')->middleware('auth')->middleware('roles');

Route::get('/lista-productos', 'ProductsController@index' );

Route::get('/product/{id}', 'ProductsController@show');

Route::get('/buscador', 'ProductsController@search' );

Route::get('/carrito', 'CarritoController@index')->name('carrito')->middleware('auth');

Route::get('/category/{id}', 'ProductsController@filtrar' );

Route::get('/vistaProducto/{id}', 'ProductsController@vista' )->middleware('auth');

Route::get('/carrito', 'CarritoController@index')->middleware('auth');

Route::post('/agregarCarrito', 'CarritoController@store')->middleware('auth');

Route::post('/sacarCarrito', 'CarritoController@delete')->middleware('auth');

Route::get('/perfil', 'UsersController@index')->middleware('auth');

Route::post('/eliminoProducto', 'ProductsController@destroy')->middleware('auth')->middleware('roles');

Route::post('/masUno', 'CarritoController@masUno')->middleware('auth');

Route::post('/cartclose', 'CarritoController@cartclose');

Route::get('/historia', function(){
  return view('historia');
});

Route::get('/instalar',function(){
	Artisan::call("storage:link");
});