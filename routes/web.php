<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateMedicoController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/medicos', [App\Http\Controllers\ProfissionalController::class, 'index'])->name('medicos');

Route::get('/pacientes', [App\Http\Controllers\PacientesController::class, 'index'])->name('pacientes');
Route::post('/pacientes', [App\Http\Controllers\PacientesController::class, 'store'])->name('store.pacientes');

Route::get('/consultas', [App\Http\Controllers\ConsultasController::class, 'index'])->name('consultas');
Route::post('/consultas', [App\Http\Controllers\ConsultasController::class, 'store'])->name('store.consultas');
Route::get('/consultas/editar/{id}', [App\Http\Controllers\HomeController::class, 'editar'])->name('editar.consulta');
Route::get('/consultas/excluir/{id}', [App\Http\Controllers\HomeController::class, 'excluir'])->name('excluir.consulta');

// Route::post('/home', [App\Http\Controllers\ConsultasController::class, 'listar'])->name('listar.consultas');


Route::get('/createMedico', [App\Http\Controllers\CreateMedicoController::class, 'index'])->name('createMedico');
Route::post('/createMedico', [App\Http\Controllers\CreateMedicoController::class, 'store'])->name('store');
Route::get('/medicos/excluir/{id}', [App\Http\Controllers\CreateMedicoController::class, 'excluir'])->name('excluir');
Route::get('/createMedico/editar/{id}', [App\Http\Controllers\CreateMedicoController::class, 'editar'])->name('editarmedico');




