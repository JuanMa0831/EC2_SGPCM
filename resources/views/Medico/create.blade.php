<!-- resources/views/medicos/create.blade.php -->

<h1>Crear Nuevo Médico</h1>

<!-- Formulario para crear un nuevo médico -->
<form method="POST" action="{{ route('medicos.store') }}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <!-- Agrega aquí los campos restantes del formulario -->
    <button type="submit">Guardar</button>
</form>