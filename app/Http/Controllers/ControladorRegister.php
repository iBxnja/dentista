<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class ControladorRegister extends Controller
{
    public function create()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
        try {
            // Validación
            $validatedData = $request->validate([
                'name' => [
                    'required',
                    Rule::unique('users', 'name')
                ],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users', 'email')
                ],
                'password' => 'required|confirmed',
            ]);
    
            // Creación de usuario
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);
    
            // Login del usuario
            auth()->login($user);
    
            // Mensaje de éxito
            Log::info('Registro exitoso. Usuario logueado.', ['user' => $user]);
            $mensaje = 'Te has registrado correctamente';
            session()->flash('mensaje', $mensaje);
    
            // Redirección a la página de inicio
            return redirect()->to('/inicio');
        } catch (\Exception $e) {
            // Capturar cualquier excepción y registrarla para depuración
            Log::error('Error durante el registro: ' . $e->getMessage());
    
            // Redirigir al usuario a una página de error o mostrar un mensaje de error en la página de registro
            return redirect()->back()->withErrors(['error' => 'Hubo un problema durante el registro. Por favor, inténtalo de nuevo.']);
        }
    }
    



    
}
