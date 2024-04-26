@extends('layouts.app')

@section('content')
<div class="container mt-4">
<div class="container">
    <h1>Listado de Pacientes</h1>
    <a href="{{ route('pacientes.create') }}" class="btn btn-primary mb3">Crear Nuevo Paciente</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                <td scope="col"><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->id }}</a></td>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->apellido }}</td>
                    <td>
                    

                        <!-- Agrega un formulario de eliminación aquí si lo necesitas -->
                    </td>
                    <a href="{{ route('index') }}" class="btn btn-secondary">Salir</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection