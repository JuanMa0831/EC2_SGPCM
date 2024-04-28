<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Médico</title>
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
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            background-color: #6c757d;
            color: #fff;
            margin-left: 10px;
        }

        .btn-primary:hover {
            opacity: 0.8;
        }

        /* Estilos para el formulario */
        .form-container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
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
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Editar Médico</h1>
        <form action="{{ route('medicos.update', $medico) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $medico->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" class="form-control" value="{{ $medico->apellido }}" required>
            </div>

            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <input type="text" name="especialidad" class="form-control" value="{{ $medico->especialidad }}" required>
            </div>

            <div class="form-group">
                <label for="horario">Horarios:</label>
                <input type="text" name="horario" class="form-control" value="{{ $medico->horario }}">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" value="{{ $medico->telefono }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $medico->email }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Médico</button>
            <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

