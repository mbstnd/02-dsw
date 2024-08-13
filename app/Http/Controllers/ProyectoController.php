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
        $user = Auth::user();
        if ($user == null) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No Existe una sesion activa']);
        }

        // Validar Solicitud
        $validationMessages = [
            'name.required' => 'El nombre del proyecto es obligatorio.',
            'fecha_inicio.required' => 'La fecha de inicio es obligatoria.',
            'fecha_inicio.date' => 'Introduce una fecha de inicio válida.',
            'estado.required' => 'El estado del proyecto es obligatorio.',
            'responsable.required' => 'El responsable del proyecto es obligatorio.',
            'monto.required' => 'El monto del proyecto es obligatorio.',
            'monto.numeric' => 'El monto debe ser un valor numérico.',
            'created_by.required' => 'El campo creado por es obligatorio.',
            'created_by.exists' => 'El ID del usuario que creó el proyecto debe existir en la base de datos.',
        ];

        $_request->validate([
            'name' => 'required|string|max:50',
            'fecha_inicio' => 'required|date',
            'estado' => 'required|string|max:255',
            'responsable' => 'required|string|max:255',
            'monto' => 'required|numeric',
            'created_by' => 'required|exists:users,id',

        ], $validationMessages);

        try {

            //Insertar registro en la BD

            Proyecto::create([
                'name' => $_request->name,
                'fecha_inicio' => $_request->fecha_inicio,
                'estado' => $_request->estado,
                'responsable' => $_request->responsable,
                'monto' => $_request->monto,
                'created_by' => $user->id,
                'activo' => false,

            ]);


            return redirect()->back()->with('success', 'Proyecto creado con exito');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al crear el proyecto' . $e->getMessage());

        }
    }
    public function enable() {}

    public function disable() {}

    public function delete() {}

    public function update() {}
}
