<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ControladorNota extends Controller
{
    public function index()
    {
        $Nota = new Nota();
        $aNota = $Nota->obtenerTodos();
        return view('notas.notas-listar', compact('aNota'));
    }

    public function enviarNombreApellido()
    {
        $cliente = new Cliente();
        $aCliente = $cliente->obtenerNombreApellido();
        $nota = new Nota();
        $aNota = $nota->obtenerTodos();
        return view('notas.notas-nuevo', compact('aCliente', 'aNota'));
    }


    public function guardar(Request $request)
    {
        // dd($request->all());
        $Nota = new Nota();
        $Nota->cargarDesdeRequest($request);

        if (empty($Nota->titulo) || empty($Nota->texto) || empty($Nota->numeroSesion) || empty($Nota->fk_idCliente)) {
            $error = "¡Parece que ocurrió un error!.";
            return view('inicio.inicio', compact('error'));
        } else {
            $Nota->guardar();
            $mensaje = "¡Excelente, se agregó correctamente el cliente <span class='text-black font-bold'></span>!.";
            // dd($mensaje);
            $aNota = $Nota->obtenerTodos();
            return view('inicio.inicio', compact('mensaje'));
        }
    }

    public function eliminar($id)
    {
        $nota = Nota::find($id); // Asegúrate de que la clase sea 'imagenes' en lugar de 'Imagenes'

        if ($nota) {
            $nota->eliminar();
            $mensaje = "¡Excelente, se eliminó correctamente la nota!";
            return redirect()->route('inicio.inicio')->with('mensaje', $mensaje);
        } else {
            $error = "¡Parece que ocurrió un error!.";
            return redirect()->route('inicio.inicio')->with('error', $error);
        }
    }


    public function mostrarNota($id)
    {    
        // Dump para verificar si la ID llega correctamente
        // dd($id);
    
        // Obtén la nota por su ID
        $nota = Nota::find($id);
    
        // Verifica si la nota fue encontrada
        if (!$nota) {
            abort(404); // Devuelve un error 404 si la nota no existe
        }
    
        // Envia la nota a la vista 'notas-mostrar.blade.php'
        return view('notas.notas-mostrar', compact('nota'));
    }
    
    
    
}
