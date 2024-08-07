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

Route::get('/',  [ClienteController::class, 'index'])->name('cliente.index');

//RUTAS DE CLIENTES
Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/clientes/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

//RUTAS DE DEPARTAMENTOS
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamento.index');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('/departamentos/{id}', [DepartamentoController::class, 'edit'])->name('departamento.edit');
Route::put('/departamentos/{id}', [DepartamentoController::class, 'update'])->name('departamento.update');
Route::delete('/departamentos/{id}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');