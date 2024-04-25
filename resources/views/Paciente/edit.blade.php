<!-- resources/views/pacientes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Paciente</h1>
    <!-- Formulario de edición de pacientes -->
    <form action="{{ route('pacientes.update', $paciente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $paciente->nombre }}" required>
        </div>
        
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" value="{{ $paciente->apellido }}" required>
        </div>

        <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $paciente->fecha_nacimiento }}" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" class="form-control" value="{{ $paciente->direccion }}">
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $paciente->telefono }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $paciente->email }}">
        </div>

        <!-- Agrega más campos del formulario según sea necesario -->
        <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
    </form>
@endsection
