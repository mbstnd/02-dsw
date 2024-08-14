<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyectoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No Existe una sesion activa']);
        }

        $data = Proyecto::all();
        return view('backoffice.mantenedor.proyecto', [
            'user' => $user,
            'data' => $data

        ],);
    }

    public function getById() {}

    public function create(Request $_request)
    {
        try {
            $user = Auth::user();
            if ($user == null) {
                return redirect()->route('usuario.login')->withErrors(['message' => 'No Existe una sesión activa']);
            }

            // Validar Solicitud
            $validationMessages = [
                'name.required' => 'El nombre del proyecto es obligatorio.',
                'name.unique' => 'Ya existe un proyecto con este nombre.',
                'fecha_inicio.required' => 'La fecha de inicio es obligatoria.',
                'fecha_inicio.date' => 'Introduce una fecha de inicio válida.',
                'estado.required' => 'El estado del proyecto es obligatorio.',
                'responsable.required' => 'El responsable del proyecto es obligatorio.',
                'monto.required' => 'El monto del proyecto es obligatorio.',
                'monto.numeric' => 'El monto debe ser un valor numérico.',
            ];

            $_request->validate([
                'name' => 'required|string|max:50|unique:proyectos,name',
                'fecha_inicio' => 'required|date',
                'estado' => 'required|string|max:255',
                'responsable' => 'required|string|max:255',
                'monto' => 'required|numeric',
            ], $validationMessages);

            // Crear nuevo proyecto
            $proyecto = new Proyecto();
            $proyecto->name = $_request->input('name');
            $proyecto->fecha_inicio = $_request->input('fecha_inicio');
            $proyecto->estado = $_request->input('estado');
            $proyecto->responsable = $_request->input('responsable');
            $proyecto->monto = $_request->input('monto');
            $proyecto->created_by = $user->id;

            // Guardar proyecto en la base de datos
            $proyecto->save();


            return redirect()->route('proyectos.index')
                ->with('success', 'Proyecto creado con éxito');
        } catch (Exception $e) {
            // Manejar el error y redirigir con mensaje de error
            return redirect()->back()->with('error', 'Error al crear el proyecto: ' . $e->getMessage());
        }
    }
    public function enable() {}

    public function disable() {}

    public function delete() {}

    public function update() {}
}
