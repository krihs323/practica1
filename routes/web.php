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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*
* Ruta ejemplo1, para poder acceder desde una url
*/
Route::get('comprobarnombre', 'EstudianteController@comprobarNombre')->name('ejemplo1');
Route::get('validar', 'EstudianteController@validarNombre')->name('validarNombre');
