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
        $entidad = new Cliente();
        $entidad->cargarDesdeRequest($request);

        if ($entidad->nombre == '') {
            return view('inicio.inicio');
        } else {
            $entidad->guardar();
            $cliente = new Cliente();
            $aClientes = $cliente->obtenerTodos();
            return view('cliente.cliente-nuevo', compact('aClientes'));    
        }
    }

    public function eliminar($id){   
        #Cliente::find(
        # Este método se utiliza para buscar un registro en la tabla asociada
        #al modelo mediante su clave primaria. El argumento $id es el valor de
        #la clave primaria del registro que se está buscando.
        $cliente = Cliente::find($id);
        $mensaje = "¡Excelente, se elimino correctamente!.";
        $error = "¡Parece que ocurrió un error!.";
        if ($cliente) {
            $cliente->eliminar();
            $aClientes = $cliente->obtenerTodos();
            // Puedes redirigir a la página de lista de culturas u otra página después de la eliminación.
            return view('cliente.cliente-listar', compact('mensaje', 'aClientes'));
        } else {
            // Manejo de error si la cultura no se encuentra.
            return view('cliente.cliente-listar', ['error' => $error]);
        }
    }

}
