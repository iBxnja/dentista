<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    public function index(){

        $cliente = new Cliente();
        $aClientes = $cliente->obtenerTodos();

        return view('cliente.cliente-listar', compact('aClientes'));
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
            $mensaje = "¡Excelente, se agrego correctamente el cliente <span class='text-black font-bold'>$cliente->nombre $cliente->apellido</span>!.";
            $aClientes = $cliente->obtenerTodos();
            return view('inicio.inicio', compact('mensaje'));    
        }
    }


    
    public function eliminar($id) {   
        $cliente = Cliente::find($id);
        $mensajeRojo = "¡Excelente, se eliminó correctamente el cliente <span class='text-black font-bold'>$cliente->nombre $cliente->apellido</span>!.";
        $error = "¡Parece que ocurrió un error!.";
    
        if ($cliente) {
            $cliente->eliminar();
            return view('inicio.inicio', compact('mensajeRojo'));    
        } else {
            return view('cliente.cliente-listar', ['error' => $error]);
        }
    }
    
}
