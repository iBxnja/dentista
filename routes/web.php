<?php

use App\Http\Controllers\ControladorCita;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorCliente;
use App\Http\Controllers\ControladorImagen;
use App\Http\Controllers\ControladorNota;
use App\Http\Controllers\ControladorRegister;

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
    return view('inicio.inicio');
})->name('inicio.inicio');
;

Route::get('inicio/cliente-nuevo', function () {
    return view('cliente/cliente-nuevo');
});
Route::get('inicio/cita-nuevo', function () {
    return view('citas/cita-nuevo');
});
Route::get('inicio/imagenes-nuevo', function () {
    return view('imagenes/imagenes-nuevo');
});






#---------------------------------------------------------------#
#                  Controlador login                            #
#---------------------------------------------------------------#
Route::prefix('login')->group(function () {
    
    Route::get('/', [ControladorLogin::class, 'index'])
        ->middleware('guest')#en Laravel se aplica a una ruta específica y establece un middleware llamado 'guest' para esa ruta.
        ->name('login.index');#nombre que yo designo, puede ser otro

    Route::post('/login', [ControladorLogin::class, 'store'])->name('login.store');#nombre que yo designo, puede ser otro
    
    Route::get('/logout', [ControladorLogin::class, 'destroy'])
        ->middleware('auth')#Este middleware asegura que el usuario que intenta acceder a la ruta esté autenticado.
        ->name('login.destroy');#nombre que yo designo, puede ser otro
});
#---------------------------------------------------------------#





#---------------------------------------------------------------#
#                  Controlador Cliente                          #
#---------------------------------------------------------------#
Route::prefix('inicio')->group(function () {
    Route::get('/cliente-listar', [ControladorCliente::class, 'index'])->name('cliente-listar');
    Route::post('/cliente-nuevo', [ControladorCliente::class, 'guardar']);
    Route::get('/cliente-listar/{id}/eliminar', [ControladorCliente::class, 'eliminar'])->name('cliente.eliminar');
    
    // Route::get('/mostrar-clientes', [ControladorCliente::class, 'mostrarClientes'])->name('mostrar.clientes');
    // Route::get('/culturas', [culturaControlador::class, 'index']);
});
#---------------------------------------------------------------#





#---------------------------------------------------------------#
#                  Controlador Nota                             #
#---------------------------------------------------------------#
Route::prefix('inicio')->group(function () {
    Route::get('/notas-listar', [ControladorNota::class, 'index'])->name('notas-listar');
    // Route::post('/cliente-nuevo', [ControladorNota::class, 'guardar']);
    // Route::get('/cliente-listar/{id}/eliminar', [ControladorNota::class, 'eliminar'])->name('cliente.eliminar');
    
    // Route::get('/mostrar-clientes', [ControladorCliente::class, 'mostrarClientes'])->name('mostrar.clientes');
    // Route::get('/culturas', [culturaControlador::class, 'index']);
});
#---------------------------------------------------------------#





#---------------------------------------------------------------#
#                  Controlador Register                         #
#---------------------------------------------------------------#
Route::prefix('register')->group(function () {
    Route::get('/register', [ControladorRegister::class, 'create'])
        ->middleware('guest')#en Laravel se aplica a una ruta específica y establece un middleware llamado 'guest' para esa ruta.
        ->name('register.index');#nombre que yo designo, puede ser otro
    Route::post('/register', [ControladorRegister::class, 'store'])
    ->name('register.store');#nombre que yo designo, puede ser otro
});


#---------------------------------------------------------------#





#---------------------------------------------------------------#
#                   Controlador Citas                           #
#---------------------------------------------------------------#
Route::prefix('inicio')->group(function () {
    Route::get('/cita-listar', [ControladorCita::class, 'index'])->name('cita-listar');
    Route::get('/cita-nuevo', [ControladorCita::class, 'enviarNombreApellido'])->name('cita-nuevo');
    Route::post('/cita-nuevo', [ControladorCita::class, 'guardar']);
    Route::get('/cita-listar/{id}/eliminar', [ControladorCita::class, 'eliminar'])->name('cita.eliminar');
    
});


#---------------------------------------------------------------#





#---------------------------------------------------------------#
#                   Controlador imagenes                        #
#---------------------------------------------------------------#
Route::prefix('inicio')->group(function () {
    Route::get('/imagenes-nuevo', [ControladorImagen::class, 'enviarNombreApellido'])->name('imagenes-nuevo');
    Route::post('/imagenes-nuevo', [ControladorImagen::class, 'guardar']);
    Route::get('/imagenes-listar', [ControladorImagen::class, 'index'])->name('imagenes');
    Route::get('/imagenes-listar/{id}/eliminar', [ControladorImagen::class, 'eliminar'])->name('imagenes.eliminar');
});



#---------------------------------------------------------------#
