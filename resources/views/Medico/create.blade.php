<!-- resources/views/medicos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Médico</h1>
    <!-- Formulario de creación de medicos -->
    <form action="{{ route('medicos.store') }}" method="POST">
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
        <label for="especialidad">Especialidad:</label>
        <input type="text" name="especialidad" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="horario">Horarios:</label>
    <input type="text" name="horario" class="form-control" required>
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
    <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
