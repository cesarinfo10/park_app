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

// Tipo Usuario
Route::resource('tipo', 'TipoController');

// Usuarios
Route::resource('user', 'UsuariosController');
// inicio de Sesion
Route::get('sesion/{email}/{pass}', 'UsuariosController@inicioSesion');

// Tipo Mensaje
Route::resource('tipom', 'TipoMensajesController');
// Mensaje
Route::resource('mensaje', 'MensajesController');
// Categorias
Route::resource('cat', 'CategoriasController');
// Notificiones
Route::resource('noti', 'NotificacionesController');
// Estado
Route::resource('estado', 'EstadoController');
// Eventos
Route::resource('evento', 'EventosController');

