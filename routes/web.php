<?php

use App\Http\Controllers\PublicacionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

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
    return view('welcome');
});

//################ USERS ROUTES ################

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuario.inicio');

Route::get('/usuarios/crear', [UsuarioController::class, 'create'])->name('usuario.crear');

Route::post('/usuarios/guardar', [UsuarioController::class, 'store'])->name('usuario.store');

Route::get('/usuarios/actualizar/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');

Route::put('/usuarios/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

Route::get('/usuarios/eliminar/{id}', [UsuarioController::class, 'delete'])->name('usuario.eliminar');

//################ POSTS ROUTES ################
Route::get('/publicacion/ver/{id}', [PublicacionController::class, 'ver'])->name('publicacion.ver');

Route::get('/publicacion/crear/{id}', [PublicacionController::class, 'create'])->name('publicacion.crear');

Route::post('/publicacion/guardar/{id}', [PublicacionController::class, 'store'])->name('publicacion.store');




