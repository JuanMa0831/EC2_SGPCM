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
            return view('medicos.index', compact('medicos'));
        }
    
        public function create()
        {
            // Retornar la vista para crear un nuevo médico
            return view('medicos.create');
        }
    
        public function store(Request $request)
        {
            // Validar los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
                // Agrega aquí la validación para otros campos si es necesario
            ]);
    
            // Crear un nuevo médico en la base de datos
            Medico::create($request->all());
    
            // Redirigir a la página de lista de médicos
            return redirect()->route('medicos.index');
        }
    
        public function show($id)
        {
            // Obtener el médico por su ID
            $medico = Medico::findOrFail($id);
            
            // Retornar la vista con los detalles del médico
            return view('medicos.show', compact('medico'));
        }
    
        public function edit($id)
        {
            // Obtener el médico por su ID
            $medico = Medico::findOrFail($id);
            
            // Retornar la vista para editar el médico
            return view('medicos.edit', compact('medico'));
        }
    
        public function update(Request $request, $id)
        {
            // Validar los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
                // Agrega aquí la validación para otros campos si es necesario
            ]);
    
            // Actualizar el médico en la base de datos
            Medico::findOrFail($id)->update($request->all());
    
            // Redirigir a la página de lista de médicos
            return redirect()->route('medicos.index');
        }
    
        public function destroy($id)
        {
            // Eliminar el médico de la base de datos
            Medico::findOrFail($id)->delete();
    
            // Redirigir a la página de lista de médicos
            return redirect()->route('medicos.index');
        }
    
}
