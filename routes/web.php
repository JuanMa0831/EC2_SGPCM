<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/paciente/create', [PacienteController::class, 'create'])->name('pacientes.create');;