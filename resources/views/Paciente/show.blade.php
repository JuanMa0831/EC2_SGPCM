<!-- resources/views/pacientes/show.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paciente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
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

        /* Estilos específicos para el show de pacientes */
        .row {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .col-md-6 {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        /* Agregamos margen superior al botón "Atrás" */
        .btn-atras {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Detalles del Paciente</h1>
                <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
                <p><strong>Apellido:</strong> {{ $paciente->apellido }}</p>
                <p>Fecha de Nacimiento: {{ $paciente->fecha_nacimiento }}</p>
                <p>Género: {{ $paciente->genero }}</p>
                <p>Dirección: {{ $paciente->direccion }}</p>
                <p>Teléfono: {{ $paciente->telefono }}</p>
                <p>Email: {{ $paciente->email }}</p>

                <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar Paciente</button>
                    <a href="{{ route('pacientes.edit', $paciente) }}" class="btn btn-primary">Editar</a>
                </form>

                <!-- Enlace de regreso al índice -->
                <a href="{{ route('pacientes.index') }}" class="btn btn-secondary btn-atras">Atrás</a>
            </div>
        </div>
    </div>
</body>
</html>

