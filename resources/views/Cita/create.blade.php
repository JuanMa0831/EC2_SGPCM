<!-- resources/views/citas/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Cita</h1>
    <form method="POST" action="{{ route('citas.store') }}">
        @csrf

        <div class="form-group">
            <label for="paciente_id">Paciente:</label>
            <select name="paciente_id" id="paciente_id" class="form-control">
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="medico_id">Médico:</label>
            <select name="medico_id" id="medico_id" class="form-control">
                @foreach($medicos as $medico)
                    <option value="{{ $medico->id }}">{{ $medico->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_cita">Fecha de la Cita:</label>
            <input type="date" name="fecha_cita" id="fecha_cita" class="form-control">
        </div>

        <div class="form-group">
            <label for="hora_cita">Hora de la Cita:</label>
            <input type="time" name="hora_cita" id="hora_cita" class="form-control">
        </div>

        <div class="form-group">
            <label for="motivo_consulta">Motivo de Consulta:</label>
            <textarea name="motivo_consulta" id="motivo_consulta" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cita</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection