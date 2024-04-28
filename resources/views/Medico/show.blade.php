<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Médico</title>
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

        /* Estilos para los detalles del médico */
        .details-container {
            max-width: 300px;
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

        p {
            margin-bottom: 10px;
        }

        /* Estilos específicos para los botones */
        .btn-group {
            margin-top: 20px;
        }

        .btn-back {
            margin-top: 10px;
            
        }

        /* Resto de estilos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="details-container">
        <h1>Detalles del Médico</h1>
        <p><strong>Nombre:</strong> {{ $medico->nombre }}</p>
        <p><strong>Apellido:</strong> {{ $medico->apellido }}</p>
        <p><strong>Especialidad:</strong> {{ $medico->especialidad }}</p>
        <p>Horarios: {{ $medico->horarios }}</p>
        <p>Teléfono: {{ $medico->telefono }}</p>
        <p>Email: {{ $medico->email }}</p>

        <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="btn-group">
                <button type="submit" class="btn btn-danger">Eliminar Médico</button>
                <a href="{{ route('medicos.edit', $medico) }}" class="btn btn-primary">Editar</a>
            </div>
        </form>

        <!-- Muestra más detalles del médico según sea necesario -->
        <a href="{{ route('medicos.index') }}" class="btn btn-secondary btn-back">Atrás</a>
    </div>
</body>
</html>
