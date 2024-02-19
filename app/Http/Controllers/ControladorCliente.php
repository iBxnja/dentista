<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Contracts\Session\Session;
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
            session(['cliente' => [
                'id' => $cliente->idCliente,
                'nombre' => $cliente->nombre,
                'apellido' => $cliente->apellido,
            ]]);
            
            // Hacer un dd de la información del cliente en la sesión
            dd(session('cliente'));
            $mensaje = "<span class='text-black font-bold'>¡Excelente, se agregó correctamente el cliente <span class='text-black font-bold'>$cliente->nombre $cliente->apellido</span>!.</span>";
            // dd($mensaje);
            $aClientes = $cliente->obtenerTodos();
            return view('inicio.inicio', compact('mensaje'));  
        }
    }


    
    public function eliminar($id) {   
        $cliente = Cliente::find($id);
    
        if ($cliente) {
            // Almacenar información del cliente en la sesión antes de eliminarlo
            session(['clienteEliminado' => [
                'nombre' => $cliente->nombre,
                'apellido' => $cliente->apellido,
            ]]);
    
            // Eliminar el cliente
            $cliente->eliminar();
    
            // Hacer un dd del contenido de la sesión clienteEliminado
            dd(session('clienteEliminado'));
        } else {
            // Mensaje de error
            $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
    
            // Redirigir a la vista con el mensaje de error
            return view('cita.cita-listar', compact('error'));  
        }
    }
    
    
}
