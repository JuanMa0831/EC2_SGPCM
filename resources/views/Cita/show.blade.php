<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Cita</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
       /* Estilos para los botones */
       .btn {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-primary:hover, .btn-secondary:hover, .btn-danger:hover {
            opacity: 0.8;
        }

        /* Estilos para la tabla */
        p {
            margin-bottom: 10px;
        }
        .btn-group {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .btn-atras {
            margin-top: 10px;
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
        .motivo-consulta-box {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            overflow: auto; 
            max-height: 200px; 
            resize: vertical;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles de la Cita</h1>
        <p><strong>ID:</strong> {{ $cita->id }}</p>
        <p><strong>Paciente:</strong> {{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
        <p><strong>Médico:</strong> {{ $cita->medico->nombre }} {{ $cita->medico->apellido }}</p>
        <p><strong>Fecha de Cita:</strong> {{ $cita->fecha_cita }}</p>
        <p><strong>Hora de Cita:</strong> {{ $cita->hora_cita }}</p>
        <p class="motivo-consulta"><strong>Motivo de Consulta:</strong></p>
        <div class="motivo-consulta-box">
            <p>{{ $cita->motivo_consulta }}</p>
        </div>
     
        <div class="btn-group">
            <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar Cita</button>
                <a href="{{ route('citas.edit', $cita) }}" class="btn btn-primary">Editar</a>
            </form>
            
            <a href="{{ route('citas.index') }}" class="btn btn-secondary btn-atras">Atrás</a>
        </div>
    </div>
</body>
</html>

