<!-- resources/views/pacientes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalles del Paciente</h1>
    <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $paciente->apellido }}</p>
    <p>Fecha de Nacimiento: {{ $paciente->fecha_nacimiento }}</p>
    <p>Género: {{ $paciente->genero }}</p>
    <p>Dirección: {{ $paciente->direccion }}</p>
    <p>Teléfono: {{ $paciente->telefono }}</p>
    <p>Email: {{ $paciente->email }}</p>
    <!-- Muestra más detalles del paciente según sea necesario -->
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Volver al Listado</a>
@endsection
