<!-- resources/views/medicos/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-6">
<h1>Detalles del Médico</h1>
    <p><strong>Nombre:</strong> {{ $medico->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $medico->apellido }}</p>
    <p>Especialidad: {{ $medico->especialidad }}</p>
    <p>Horarios: {{ $medico->horarios }}</p>
    <p>Teléfono: {{ $medico->telefono }}</p>
    <p>Email: {{ $medico->email }}</p>

    <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar Médico</button>
    <a href="{{ route('medicos.edit', $medico) }}" class="btn btn-primary">Editar</a>
</form>

    <!-- Muestra más detalles del paciente según sea necesario -->
    <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Atras</a>
    </div>
    </div>
@endsection
