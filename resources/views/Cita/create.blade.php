<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Cita</title>
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
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            width: 100%; /* Asegurar que el textarea ocupe todo el ancho disponible */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
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
        <h1>Crear Nueva Cita</h1>
        <form action="{{ route('citas.store') }}" method="POST">
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
    </div>
</body>
</html>


