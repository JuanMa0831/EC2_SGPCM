<?php

namespace App\Http\Controllers;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    
        public function index()
        {
            // Obtener todos los médicos de la base de datos
            $medicos = Medico::all();
            
            // Retornar la vista con los médicos
            return view('medico.index', compact('medicos'));
        }
    
        public function create()
        {
            // Retornar la vista para crear un nuevo médico
            return view('medico.create');
        }
    
        public function store(Request $request)
        {
            // Validar los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
                'especialidad'=> 'required',
                'horarios'=> 'required',
                'telefono'=> 'required',
                'email'=> 'required',
                // Agrega aquí la validación para otros campos si es necesario
            ]);
    
            // Crear un nuevo médico en la base de datos
            Medico::create($request->all());
    
            // Redirigir a la página de lista de médicos
            return redirect()->route('medicos.index')->with('success', 'Médico creado exitosamente.');;
        }
    
        public function show(Medico $medico)
        {
            
            // Retornar la vista con los detalles del médico
            return view('medico.show', compact('medico'));
        }
    
        public function edit(Medico $medico)
        {
            
            // Retornar la vista para editar el médico
            return view('medico.edit', compact('medico'));
        }
    
        public function update(Request $request, Medico $medico)
        {
          // Validar los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
                'especialidad'=> 'required',
                'horarios'=> 'required',
                'telefono'=> 'required',
                'email'=> 'required',  
                // Agrega aquí la validación para otros campos si es necesario
            ]);
    
            // Actualizar el médico en la base de datos
            $medico->update($request->all());
    
            // Redirigir a la página de lista de médicos
            return redirect()->route('medicos.show', $medico)->with('success', 'Médico actualizado exitosamente.');
        }
    
        public function destroy(Medico $medico)
        {
            // Eliminar el médico de la base de datos
            $medico->delete();
    
            // Redirigir a la página de lista de médicos
            return redirect()->route('medicos.index')->with('success', 'Médico eliminado exitosamente.');;
        }
    
}
