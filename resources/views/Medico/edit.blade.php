<!-- resources/views/medicos/edit.blade.php -->

<h1>Editar Médico</h1>

<!-- Formulario para editar un médico existente -->
<form method="POST" action="{{ route('medicos.update', $medico->id) }}">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ $medico->nombre }}">
    <!-- Agrega aquí los campos restantes del formulario -->
    <button type="submit">Actualizar</button>
</form>
