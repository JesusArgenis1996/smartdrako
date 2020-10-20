<?php

use Illuminate\Support\Facades\Route;

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

//sucursales 
Route::get('/sucursales/create','SucursalController@create');
Route::post('/sucursales','SucursalController@store');

Route::get('/sucursales/{sucursal}/edit', 'SucursalController@edit');
Route::put('/sucursales/{sucursal}','SucursalController@update');

//empleados
Route::get('/empleados/create','EmpleadoController@create');
Route::post('/empleados','EmpleadoController@store');

Route::get('/empleados/{empleado}/edit', 'EmpleadoController@edit');
Route::put('/empleados/{empleado}','EmpleadoController@update');
