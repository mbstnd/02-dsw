<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('home');


Route::get('/login', [UserController::class, 'formularioLogin'])->name('usuario.login');
Route::post('/login', [UserController::class, 'login'])->name('usuario.validar');

Route::get('/users/register', [UserController::class, 'formularioNuevo'])->name('usuario.registrar');
Route::post('/users/register', [UserController::class, 'registrar'])->name('usuario.registrar');

Route::get('/backoffice', function(){
    $user = Auth::user();
    if($user == NULL){
        return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesion activa.']);
    }

    return view('backoffice.dashboard', ['user' => $user]);

})->name('backoffice.dashboard');

Route::get('/backoffice/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::post('/backoffice/proyectos/new', [ProyectoController::class, 'create'])->name('proyectos.create');
