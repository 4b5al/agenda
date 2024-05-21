<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/consultas', [App\Http\Controllers\ConsultasController::class, 'index'])->name('consultas');
Route::get('/createMedico', [App\Http\Controllers\CreateMedicoController::class, 'index'])->name('createMedico');

