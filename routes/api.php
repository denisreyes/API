<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('espacio','EspacioController')->middleware('cors');
Route::resource('estudiante','EstudianteController')->middleware('cors');
Route::resource('cita','CitaController')->middleware('cors');
Route::resource('prestador','PrestadorController')->middleware('cors');
Route::resource('inventario','InventarioController')->middleware('cors');
Route::resource('servicio','ServicioController')->middleware('cors');