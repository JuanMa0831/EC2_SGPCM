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
    <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="genero">Género:</label>
        <select name="genero" class="form-control" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" class="form-control">
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
