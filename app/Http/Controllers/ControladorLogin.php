<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLogin extends Controller
{
    public function index(){
        return view('login.login');
    }
    
    public function store() {
        #verifica si las credenciales ingresadas (correo y contraseña) son válidas para iniciar sesión.
        #La función attempt en Laravel se utiliza para intentar autenticar a un usuario. 
        if(auth()->attempt(request(['email', 'password'])) == false) {
            #Si la autenticación no tiene éxito, se utiliza back() para redirigir al usuario a la página anterior
            #withErrors para agregar mensajes de error a la sesión. 
            return back()->withErrors([
                'mensaje' => 'Email o contraseña incorrecto.',
            ]);
            #Si la autenticación es exitosa, se verifica el rol del usuario.
        } else {
            # Si el usuario autenticado tiene un rol de "admin"
            if(auth()->user()->role == 'admin') {
                #se redirige a la ruta llamada 'admin.index'(no esta definida)
                return redirect()->route('admin.index');
                #sino 
            } else {
                #te redirige a la galeria.
                return redirect()->to('/galeria');
            }
        }
    }

    #cerrar la session
    public function destroy() {
        #cerrame la session
        auth()->logout();
        #redireccioname aca
        return redirect()->to('/login');
    }
}
