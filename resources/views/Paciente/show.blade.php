<!-- resources/views/pacientes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalles del Paciente</h1>
    <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $paciente->apellido }}</p>
    <!-- Muestra más detalles del paciente según sea necesario -->
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Volver al Listado</a>
@endsection
