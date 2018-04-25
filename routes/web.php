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

Route::get('/login_admin', function () {
    return view('welcomelogin');
});

Auth::routes();


Route::get('/altclientes', 'Acciones@forma_alta_clientes')->name('altclientes');
Route::get('/alta_cuenta', 'Acciones@alta_cuenta')->name('alta_cuenta');
Route::get('/transferencias', 'Acciones@transferencias')->name('transferencias');
Route::get('/clientes', 'Acciones@clientes')->name('clientes');
Route::get('/cuentas', 'Acciones@cuentas')->name('cuentas');

//proyecto final mobiles
//login y logout

Route::post('/logout_admin', 'Acciones@logout_admin')->name('logout_admin');
//index
Route::get('/home', 'Acciones@showReportes')->name('home');
//clientes
Route::get('personas','Acciones@showRegistrationForm')->name('personas');  
Route::post('personas_create','Acciones@create')->name('personas_create');  
Route::get('personas_delete/{id}','Acciones@DeletePersona')->name('personas_delete');   
Route::post('personas_update','Acciones@UpdatePersona')->name('personas_update');   
//proyectos
Route::get('proyectos','Acciones@showRegistrationFormproyectos')->name('proyectos');  
Route::post('proyectos_create','Acciones@proyectos_create')->name('proyectos_create');  
Route::post('proyectos_update','Acciones@UpdateProyecto')->name('proyectos_update'); 
Route::get('proyectos_delete/{id}','Acciones@DeleteProyecto')->name('proyectos_delete');   
//Reportes
//Route::get('reportes','Acciones@showReportes')->name('reportes');  




//tarea 9 web apps
Route::get('libros','Acciones@showRegistrationFormLibro')->name('libros');  
Route::post('libros_create','Acciones@createLibro')->name('libros_create');  
Route::get('libros_delete/{id}','Acciones@DeleteLibro')->name('libros_delete');   
Route::post('libros_update','Acciones@UpdateLibro')->name('libros_update');   