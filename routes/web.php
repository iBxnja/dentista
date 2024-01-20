<?php

use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorCliente;

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
Route::get('/login', function () {
    return view('login/login');
});
Route::get('/register', function () {
    return view('register/register');
});

Route::get('/inicio', function () {
    return view('inicio/inicio');
});

#---------------------------------------------------------------#
#                  Controlador login                            #
#---------------------------------------------------------------#
Route::prefix('login')->group(function () {
    
    Route::get('/login', [ControladorLogin::class, 'index'])
        ->middleware('guest')#en Laravel se aplica a una ruta específica y establece un middleware llamado 'guest' para esa ruta.
        ->name('login.index');#nombre que yo designo, puede ser otro

    Route::post('/login', [ControladorLogin::class, 'store'])->name('login.store');#nombre que yo designo, puede ser otro
    
    Route::get('/logout', [ControladorLogin::class, 'destroy'])
        ->middleware('auth')##Este middleware asegura que el usuario que intenta acceder a la ruta esté autenticado.
        ->name('login.destroy');#nombre que yo designo, puede ser otro
});
#---------------------------------------------------------------#
#                  Controlador Cliente                          #
#---------------------------------------------------------------#
Route::prefix('inicio')->group(function () {
    Route::get('/cliente-listar', [ControladorCliente::class, 'index'])->name('cliente-listar');
    Route::get('/cliente-nuevo', [ControladorCliente::class, 'nuevo'])->name('cliente-nuevo');
    

    // Route::get('/culturas', [culturaControlador::class, 'index']);
    // Route::post('/culturas', [culturaControlador::class, 'guardar']);
    // Route::get('/culturas/{id}/eliminar', [culturaControlador::class, 'eliminar'])->name('culturas.eliminar');
});



#---------------------------------------------------------------#