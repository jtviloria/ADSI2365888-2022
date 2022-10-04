<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;

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
    return view('inicio');
});

Route::get('/rol', [RolesController::class, 'index'])->name('rol');

Route::post('/rol', [RolesController::class, 'store'])->name('rol');

Route::get('/rol/{id}', [RolesController::class, 'show'])->name('rol-edit');

Route::patch('/rol/{id}', [RolesController::class, 'update'])->name('rol-update');

Route::delete('/rol/{id}', [RolesController::class, 'destroy'])->name('rol-destroy');

Route::resource('usuario', UsuariosController::class);

