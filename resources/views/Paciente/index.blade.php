@extends('layouts.app')

@section('content')
    <h1>Listado de Pacientes</h1>
    <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Crear Nuevo Paciente</a>
    <table class="table">
        <thead>
            <tr>
                <th>#Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                <td><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->id }}</a></td>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->apellido }}</td>
                    <td>

                        <!-- Agrega un formulario de eliminación aquí si lo necesitas -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection