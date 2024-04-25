@extends('layouts.app')

@section('content')
    <h1>Listado de Pacientes</h1>
    <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Crear Nuevo Paciente</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->apellido }}</td>
                    <td>
                        <a href="{{ route('pacientes.show', $paciente) }}" class="btn btn-info">Ver Detalles</a>
                        <a href="{{ route('pacientes.edit', $paciente) }}" class="btn btn-primary">Editar</a>
                        <!-- Agrega un formulario de eliminación aquí si lo necesitas -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection