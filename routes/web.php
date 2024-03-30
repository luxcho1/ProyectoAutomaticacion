<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegistroHoraController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/cliente/eliminar', [ClienteController::class, 'mostrarVistaEliminar']);
    Route::get('/cliente/editar',   [ClienteController::class, 'mostrarVistaEditar']);
    Route::resource('cliente', ClienteController::class);

    Route::get('/registro/eliminar', [RegistroHoraController::class, 'mostrarVistaEliminar']);
    Route::get('/registro/editar',   [RegistroHoraController::class, 'mostrarVistaEditar']);
    Route::resource('registro', RegistroHoraController::class);
});

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
