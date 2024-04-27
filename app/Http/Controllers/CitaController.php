<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Paciente;
use App\Models\Medico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = cita::all();
        return view('cita.index', compact('citas'));
    }
    

    
    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all(); 
        return view('cita.create', compact('pacientes', 'medicos'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'paciente_id'=> 'required',
            'médico_id'=> 'required',
            'fecha_cita'=> 'required',
            'hora_cita'=> 'required',
            'motivo_consulta'=> 'required',
            // Agrega aquí la validación para otros campos si es necesario
        ]);

        Cita::create($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cita = Cita::findOrFail($id);
        return view('cita.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        return view('cita.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
       // Validar los datos del formulario
       $request->validate([
        'fecha_cita'=> 'required',
        'hora_cita'=> 'required',
        'motivo_consulta'=> 'required',
        // Agrega aquí la validación para otros campos si es necesario
    ]);

    // Actualizar el médico en la base de datos
    Cita::findOrFail($id)->update($request->all());

    // Redirigir a la página de lista de médicos
    return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       // Eliminar el médico de la base de datos
       Cita::findOrFail($id)->delete();
    
       // Redirigir a la página de lista de médicos
       return redirect()->route('citas.index');
    }
}

