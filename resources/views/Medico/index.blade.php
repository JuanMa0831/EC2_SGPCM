<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos</title>
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

        .btn-primary:hover, .btn-secondary:hover {
            opacity: 0.8;
        }

        /* Estilos para la tabla */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #2c3e50;
            color: #fff;
        }

        /* Resto de estilos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container-buttons {
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li a {
            display: block;
            text-decoration: none;
        }

        li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="container">
            <h1>Lista de Médicos</h1>
            <div class="container-buttons">
                <a href="{{ route('medicos.create') }}" class="btn btn-primary mb3">Crear Nuevo Médico</a>
                <a href="{{ route('index') }}" class="btn btn-secondary">Salir</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"># Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Especialidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicos as $medico)
                        <tr>
                            <td scope="col">
                                <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-info">{{ $medico->id }}</a>
                            </td>
                            <td>{{ $medico->nombre }}</td>
                            <td>{{ $medico->apellido }}</td>
                            <td>{{ $medico->especialidad }}</td>
                            <td>
                                <!-- Agrega un formulario de eliminación aquí si lo necesitas -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


