<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de tu aplicación</title>
    <link rel="stylesheet" href="{{ asset('http://localhost:8000/css/styles.css') }}">
</head>
<body>
    <!-- Contenido de tu aplicación -->
    @yield('content')
</body>
</html>

