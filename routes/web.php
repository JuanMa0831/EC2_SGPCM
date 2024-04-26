<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Ruta indice principal
Route::get('/index', [IndexController::class, 'index'])->name('index');
// Rutas para la gestión de pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{paciente}', [PacienteController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/{paciente}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/{paciente}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
// Rutas para gestión de médicos
Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
Route::get('/medicos/{medico}', [MedicoController::class, 'show'])->name('medicos.show');
Route::get('/medicos/{medico}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
Route::put('/medicos/{medico}', [MedicoController::class, 'update'])->name('medicos.update');
Route::delete('/medicos/{medico}', [MedicoController::class, 'destroy'])->name('medicos.destroy');
// Rutas para gestión de citas 
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');
Route::get('/citas/create', [CitaController::class, 'create'])->name('citas.create');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');
Route::get('/citas/{cita}', [CitaController::class, 'show'])->name('citas.show');
Route::get('/citas/{cita}/edit', [CitaController::class, 'edit'])->name('citas.edit');
Route::put('/citas/{cita}', [CitaController::class, 'update'])->name('citas.update');
Route::delete('/citas/{cita}', [CitaController::class, 'destroy'])->name('citas.destroy');