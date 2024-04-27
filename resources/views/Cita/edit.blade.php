@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Cita</h1>
        <form action="{{ route('citas.update', $cita->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fecha_cita">Fecha de Cita:</label>
                <input type="date" id="fecha_cita" name="fecha_cita" class="form-control" value="{{ $cita->fecha_cita }}">
            </div>
            <div class="form-group">
                <label for="hora_cita">Hora de Cita:</label>
                <input type="time" id="hora_cita" name="hora_cita" class="form-control" value="{{ $cita->hora_cita }}">
            </div>
            <div class="form-group">
                <label for="motivo_consulta">Motivo de Consulta:</label>
                <textarea id="motivo_consulta" name="motivo_consulta" class="form-control">{{ $cita->motivo_consulta }}</textarea>
            </div>
            <div class="form-group">
                <label for="paciente_id">Paciente:</label>
                <select id="paciente_id" name="paciente_id" class="form-control">
                    @foreach($pacientes as $paciente)
                        <option value="{{ $paciente->id }}" {{ $paciente->id === $cita->paciente_id ? 'selected' : '' }}>
                            {{ $paciente->nombre }} {{ $paciente->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="medico_id">Médico:</label>
                <select id="medico_id" name="medico_id" class="form-control">
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id }}" {{ $medico->id === $cita->medico_id ? 'selected' : '' }}>
                            {{ $medico->nombre }} {{ $medico->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Cita</button>
            <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection