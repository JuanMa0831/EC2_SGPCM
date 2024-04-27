<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice Principal</title>
</head>
<body>
    <h1>Panel Principal - SGPCM</h1>
    <ul>
        <li><a href="{{ route('pacientes.index') }}">Pacientes</a></li>
        <li><a href="{{ route('medicos.index') }}">Médicos</a></li>
        <li><a href="{{ route('citas.index') }}">Citas</a></li>
    
    </ul>
</body>
</html>