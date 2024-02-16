<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ControladorLogin extends Controller
{
    public function index(){

        return view('login.login');


    }
    
    public function loginVerify(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('inicio.inicio');
        } 
    
        dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
    }
    
    

    

    #cerrar la session
    public function destroy() {
        #cerrame la session
        auth()->logout();
    
        # Mensaje para la siguiente solicitud
        $mensaje = 'Has salido correctamente';
        session()->flash('mensaje', $mensaje);
    
        # Redirección
        return redirect()->to('/login/login');
    }
}
