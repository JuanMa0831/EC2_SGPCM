@extends('layouts.app')

@section('content')
<div class="container mt-4">
<div class="container">
    <h1>Lista de Citas</h1>
    <a href="{{ route('citas.create') }}" class="btn btn-primary mb3">Crear Nueva Cita</a>
    <a href="{{ route('index') }}" class="btn btn-secondary">Salir</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Paciente</th>
                <th scope="col">Medico</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
                <tr>
                <td scope="col"><a href="{{ route('citas.show', $cita->id) }}">{{ $cita->id }}</a></td>
                    <td>{{ $cita->paciente->nombre}}</td>
                    <td>{{ $cita->medico->nombre }}</td>
                    <td>
                    

                        <!-- Agrega un formulario de eliminación aquí si lo necesitas -->
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection