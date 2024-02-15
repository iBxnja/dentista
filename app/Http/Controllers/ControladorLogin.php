<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ControladorLogin extends Controller
{
    public function index(){

        return view('login.login');


    }
    
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intento de inicio de sesión
        if (Auth::attempt($credentials)) {
            session()->flash('bienvenido', '¡Bienvenido!.');
            // Autenticación exitosa
            return view('inicio.inicio');
        } else {
            // Autenticación fallida
            return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
        }
    }

    #cerrar la session
    public function destroy() {
        #cerrame la session
        auth()->logout();
        #redireccioname aca
        return redirect()->to('login');
    }
}
