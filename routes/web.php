<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
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

Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/clientes/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamento.index');
