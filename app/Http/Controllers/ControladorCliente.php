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
            $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
            return view('inicio.inicio', compact('error'));
        } else {
            $cliente->guardar();
            $mensaje = "<span class='text-black font-bold'>¡Excelente, se agregó correctamente el cliente <span class='text-black font-bold'>$cliente->nombre $cliente->apellido</span>!.</span>";
            // dd($mensaje);
            $aClientes = $cliente->obtenerTodos();
            return view('inicio.inicio', compact('mensaje'));  
        }
    }


    
    public function eliminar($id) {   
        $cliente = Cliente::find($id);
        $mensaje = "<span class='text-black font-bold'>¡Excelente, se elimino correctamente el cliente <span class='text-black font-bold'>$cliente->nombre $cliente->apellido</span>!.</span>";
        $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
    
        if ($cliente) {
            $cliente->eliminar();
            return view('inicio.inicio', compact('mensaje'));    
        } else {
            return view('cita.cita-listar', compact('error'));  
        }
    }
    
}
