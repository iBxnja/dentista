<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;

class ControladorCalendario extends Controller
{
    public function index()
    {
        $calendario = New Calendario();
        $aCalendario = $calendario->obtenerTodos();


        return view('citas.cita-listar', compact('aCalendario'));
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
    return response()->json(['mensaje' => 'Cita agendada correctamente']);
}

}
