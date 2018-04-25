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

Route::get('/user/Login', 'Acciones@Login');//test
Route::post('/user/RegistrarCliente', 'Acciones@RegistrarCliente');//test
Route::get('/user/GetClientes', 'Acciones@GetClientes');//test
Route::get('/user/GetProyectos', 'Acciones@GetProyectos');//test
Route::post('/user/RegistrarProyecto', 'Acciones@RegistrarProyecto');//test

