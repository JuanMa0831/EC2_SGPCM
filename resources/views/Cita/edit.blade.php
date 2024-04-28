<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cita</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
       /* Estilos para los botones */
       .btn {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-right: 10px; /* Agregar margen derecho a los botones */
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-primary:hover, .btn-secondary:hover {
            opacity: 0.8;
        }

        /* Estilos para el formulario */
        .form-group {
            margin-bottom: 20px; /* Agregar margen inferior a los grupos de formulario */
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="time"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px; /* Agregar margen inferior a los campos de entrada */
        }

        textarea {
            resize: vertical;
        }

        /* Resto de estilos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Cita</h1>
        <form action="{{ route('citas.update', $cita->id) }}" method="POST">
            @csrf
            @method('PUT')
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
            <button type="submit" class="btn btn-primary">Actualizar Cita</button>
            <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
