<!-- resources/views/medicos/index.blade.php -->


@extends('layouts.app')

@section('content')
<div class="container mt-4">
<div class="container">
    <h1>Lista de Médicos</h1>
    <a href="{{ route('medicos.create') }}" class="btn btn-primary mb3">Crear Nuevo Médico</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Especialidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                <td scope="col"><a href="{{ route('medicos.show', $medico->id) }}">{{ $medico->id }}</a></td>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->apellido }}</td>
                    <td>{{$medico->especialidad}}</td>
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