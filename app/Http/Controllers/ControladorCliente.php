<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
    
        $cliente = new Cliente();
    
        // Utiliza Eloquent para obtener todos los clientes
        $query = $cliente->query();
    
        // Verifica si se proporcionó un término de búsqueda
        if ($buscarpor) {
            $query->where('nombre', 'like', '%' . $buscarpor . '%');
        }
    
        $aClientes = $query->get();
    
        return view('cliente.cliente-listar', compact('aClientes', 'buscarpor'));
    }
    public function guardar(Request $request){
        // dd($request->all());
        $cliente = new Cliente();
        $cliente->cargarDesdeRequest($request);
        
        if (empty($cliente->nombre) || empty($cliente->apellido) || empty($cliente->edad)) {
            $error = "¡Parece que ocurrió un error!.";
            return view('inicio.inicio', compact('error'));
        } else {
            $cliente->guardar();
            $mensaje = "¡Excelente, se agregó correctamente el cliente <span class='text-black font-bold'>$cliente->nombre $cliente->apellido</span>!.";
            // dd($mensaje);
            $aClientes = $cliente->obtenerTodos();
            return view('inicio.inicio', compact('mensaje'));  
        }
    }


    
    public function eliminar($id) {   
        $cliente = Cliente::find($id);
        $mensajeRojo = "<span class='text-xl text-white font-bold'>¡Excelente, se eliminó correctamente el cliente<span> <span class='text-black font-bold text-lg'>$cliente->nombre $cliente->apellido</span>!.";
        $error = "¡Parece que ocurrió un error!.";
    
        if ($cliente) {
            $cliente->eliminar();
            return view('inicio.inicio', compact('mensajeRojo'));    
        } else {
            return view('cliente.cliente-listar', ['error' => $error]);
        }
    }
    
}
