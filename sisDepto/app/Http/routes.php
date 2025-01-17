<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('administracion/trabajadores', 'TrabajadorController');
Route::resource('almacen/articulos', 'ArticuloController');
Route::resource('almacen/ingresos', 'IngresosController');
Route::resource('seguridad/usuario', 'UsuarioController');
Route::get('administracion/detalles/{id}', 'TrabajadorController@details');
Route::get('almacen/detalles/{id}', 'ArticuloController@details');
Route::get('almacen/solicitar/{id}', 'ArticuloController@solicitar');
Route::get('/download', 'IngresosController@generar');
Route::get('/activar/{id}','IngresosController@activar');
Route::auth();

Route::get('/home', 'HomeController@index');
