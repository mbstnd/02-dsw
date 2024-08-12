<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function formularioLogin()
    {
        if (Auth::check()){
            return redirect()->route('backoffice,dashboard');
        }
        return view('usuario.login');
    }

    public function formularioNuevo()
    {
        if (Auth::check()){
            return redirect()->route('backoffice,dashboard');
        }
        return view('usuario.create');
    }

    public function login(Request $_request){

        $validationMessages = [
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Introduce una dirección de correo electrónico válida.',
            'password.required' => 'La contraseña es obligatoria.',
        ];



        $_request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ], $validationMessages);

        $credenciales = $_request->only('email', 'password');

        if(Auth::attempt($credenciales)){
            $user = Auth::user();
            if(!$user->activo){
                Auth::logout();
                return redirect()->route('usuario.login')->withErrors(['email' => 'El usuario se encuentra desactivado']);
            }

            // Auth Exitosa

            $_request->session()->regenerate();
            return redirect()->route('backoffice.dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'El usuario o contrasena son incorrectos']);

    }

    public function registrar(Request $_request){
        $validationMessages = [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Introduce una dirección de correo electrónico válida.',
            'password.required' => 'La contraseña es obligatoria.',
            'rePassword.required' => 'Repetir la contraseña es obligatorio.',
            'dayCode.required' => 'El código del día es obligatorio.',
        ];

        $_request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'required|string',
            'rePassword' => 'required|string',
            'dayCode' => 'required|string',
        ], $validationMessages);

        $data = $_request->only('name', 'email', 'password', 'rePassword', 'dayCode');

        if ($data['password'] != $data['rePassword']){
            return back()->withErrors(['message' => 'Las contraseñas no coinciden ']);
        }

        if ($data['dayCode'] != date('d')){
            return back()->withErrors(['message' => 'El código del dia no corresponde']);
        }

        try {
            User::create([
                'name' => $data['name'],
                'email'=> $data ['email'],
                'password' => Hash::make($data['password']),
            ]);
            return redirect()->route('usuario.login')->with('success', 'Usuario creado con Exito');
        } catch (QueryException $e){
            if($e->getCode() == 2300){
                return back()->withErrors(['message' => 'Error al crear usuario, ya existe.']);
            }
            return back()->withErrors(['message' => 'Error desconocido:', $e->getMessage()]);
        }
    }
}
