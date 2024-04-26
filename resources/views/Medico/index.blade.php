<!-- resources/views/medicos/index.blade.php -->

<h1>Lista de Médicos</h1>

<ul>
    @foreach ($medicos as $medico)
        <li>{{ $medico->nombre }} {{ $medico->apellido }}</li>
    @endforeach
</ul>
