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
Route::get('admin', function () {
    return view('templante.menu');
});


Route::get('paises', function () {
    return view('pais');
});
Route::get('ciudades', function () {
    return view('ciudad');
});
Route::get('categorias', function () {
    return view('categoria');
});
Route::get('negocios', function () {
    return view('negocio');
});

Route::get('paisesdos', function () {
    return view('paises.index');
});