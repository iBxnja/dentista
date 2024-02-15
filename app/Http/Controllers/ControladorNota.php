<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ControladorNota extends Controller
{
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        
        $nota = new Nota();
        $query = $nota->query();

        if ($buscarpor) {
            $query->where(function ($notaQuery) use ($buscarpor) {
                $notaQuery->where('titulo', 'like', '%' . $buscarpor . '%')
                          ->orWhereHas('cliente', function ($clienteQuery) use ($buscarpor) {
                              $clienteQuery->where('nombre', 'like', '%' . $buscarpor . '%');
                          });
            });
        }

        $aNota = $query->with('cliente')->orderBy('idNota')->get();

        return view('notas.notas-listar', compact('aNota', 'buscarpor'));
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
            $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
            return view('inicio.inicio', compact('error'));
        } else {
            $Nota->guardar();
            $mensaje = "¡Excelente, se agregó correctamente la nota <span class='text-black font-bold'></span>!.";
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
            $mensaje = "<span class='text-black font-bold'>¡Excelente, se eliminó correctamente la nota!.</span>";
            return view('inicio.inicio', compact('mensaje')); 
        } else {
            $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
            return view('inicio.inicio', compact('error')); 
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
