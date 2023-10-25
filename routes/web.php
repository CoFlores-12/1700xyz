<?php

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

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuario.inicio');

Route::get('/usuarios/crear', [UsuarioController::class, 'create'])->name('usuario.crear');

Route::post('/usuarios/guardar', [UsuarioController::class, 'store'])->name('usuario.store');

Route::get('/usuarios/actualizar/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');

Route::put('/usuarios/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

Route::get('/usuarios/eliminar/{id}', [UsuarioController::class, 'delete'])->name('usuario.delete');