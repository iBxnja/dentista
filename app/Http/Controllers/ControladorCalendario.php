<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ControladorCalendario extends Controller
{
    public function index()
    {
        return view('citas.cita-listar');
    }
    public function enviarListado(){
        $calendario = New Calendario();
        $aCalendario = $calendario->obtenerTodos();


        return view('citas.cita-listado', compact('aCalendario'));
    }

    public function enviarNombreApellido(){
        $cliente = new Cliente();
        $aCliente = $cliente->obtenerNombreApellido();
        return view('citas.cita-nuevo', compact('aCliente'));
    }


    public function getEvents()
    {
        $citas = Calendario::all();
    
        $eventos = [];
    
        foreach ($citas as $cita) {
            // Convierte la fecha a objeto DateTime si no lo es
            $fecha = is_string($cita->fecha) ? new \DateTime($cita->fecha) : $cita->fecha;
    
            $eventos[] = [
                'titulo' => $cita->nombre,
                'fecha' => $fecha->format('Y-m-d\TH:i:s'),
            ];
        }
    
        return response()->json($eventos);
    }
    

    public function crearCita(Request $request)
{
    $mensaje = "¡Excelente, se agregó correctamente la cita!";
    // Valida los datos del formulario
    $request->validate([
        'nombre' => 'required|string',
        'fecha' => 'required|date',
    ]);

    // Crea una nueva cita en la base de datos
    Calendario::create([
        'nombre' => $request->input('nombre'),
        'fecha' => $request->input('fecha'),
    ]);

    // Devuelve una respuesta JSON indicando que la cita se ha agendado correctamente
    // return response()->json(['mensaje' => 'Cita agendada correctamente']);
    return view('inicio.inicio', compact('mensaje'));
}




public function eliminar($id) {   
    $calendario = Calendario::find($id);
    $mensaje = "<span class='text-black font-bold'>¡Excelente, se elimino correctamente la cita!.</span>";
    $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";

    if ($calendario) {
        $calendario->eliminar();
        return view('inicio.inicio', compact('mensaje'));    
    } else {
        return view('cita.cita-listar', compact('error'));  
    }
}



}
