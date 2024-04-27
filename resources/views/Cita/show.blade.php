@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Cita</h1>
        <p><strong>ID:</strong> {{ $cita->id }}</p>
        <p><strong>Fecha de Cita:</strong> {{ $cita->fecha_cita }}</p>
        <p><strong>Hora de Cita:</strong> {{ $cita->hora_cita }}</p>
        <p><strong>Motivo de Consulta:</strong> {{ $cita->motivo_consulta }}</p>
        <p><strong>Paciente:</strong> {{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
        <p><strong>Médico:</strong> {{ $cita->medico->nombre }} {{ $cita->medico->apellido }}</p>

        <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Cita</button>
            <a href="{{ route('citas.edit', $cita) }}" class="btn btn-primary">Editar</a>
        </form>
        
        <a href="{{ route('citas.index') }}" class="btn btn-primary">Atras</a>
    </div>
@endsection