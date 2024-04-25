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
        <!-- Agrega más campos del formulario según sea necesario -->
        <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
    </form>
@endsection
