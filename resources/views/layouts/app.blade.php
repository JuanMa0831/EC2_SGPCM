<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGPCM</title>
    <!-- Agrega tus estilos CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema de Gestión de Pacientes para 
Clínicas Médicas</a>
            <!-- Agrega más elementos de la barra de navegación si es necesario -->
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Contenido de la página -->
        @yield('content')
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Pie de página de tu aplicación</span>
        </div>
    </footer>

    <!-- Agrega tus scripts JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
