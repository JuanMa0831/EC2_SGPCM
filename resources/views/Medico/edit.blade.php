<!-- resources/views/medicos/edit.blade.php -->

<@extends('layouts.app')

@section('content')
    <h1>Editar Paciente</h1>
    <!-- Formulario de edición de pacientes -->
    <form action="{{ route('pacientes.update', $paciente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $medico->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" value="{{ $medico->apellido }}" required>
        </div>

        <div class="form-group">
        <label for="especialidad">Especialidad:</label>
        <input type="date" name="especialidad" class="form-control" value="{{ $medico->especialidad }}" required>
        </div>

        <div class="form-group">
            <label for="horario">Horarios:</label>
            <input type="text" name="horario" class="form-control" value="{{ $medico->horarios }}">
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $medico->telefono }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $medico->email }}">
        </div>

        <!-- Agrega más campos del formulario según sea necesario -->
        <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
        <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-primary">Cancelar</a>
    </form>
@endsection

