<!-- resources/views/pacientes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Paciente</h1>
    <!-- Formulario de creación de pacientes -->
    <form action="{{ route('pacientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <!-- Agrega más campos del formulario según sea necesario -->
        <button type="submit" class="btn btn-primary">Crear Paciente</button>
    </form>
@endsection
