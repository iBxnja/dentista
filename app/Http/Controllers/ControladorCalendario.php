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



//     public function buscarpor(Request $request)
// {
//     // Obtiene el valor de búsqueda desde la solicitud
//     $buscarpor = $request->get('buscarpor');

//     // Instancia del modelo Calendario
//     $calendario = new Calendario();

//     // Utiliza Eloquent para obtener todas las citas
//     $query = $calendario->query();

//     // Verifica si se proporcionó un término de búsqueda
//     if ($buscarpor) {
//         $query->where('nombre', 'like', '%' . $buscarpor . '%');
//         // Reemplaza 'nombre' con el nombre real del campo que deseas buscar en la tabla de citas
//     }

//     // Obtén todas las citas según la búsqueda o sin ella
//     $aCitas = $query->get();

//     // Pasar datos a la vista, asegurándote de incluir $buscarpor
//     return view('citas.cita-listado', compact('aCitas', 'buscarpor'));
// }



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
    // Valida los datos del formulario
    $request->validate([
        'nombre' => 'required|string',
        'fecha' => 'required|date',
    ]);

    try {
        // Crea una nueva cita en la base de datos
        $nuevaCita = Calendario::create([
            'nombre' => $request->input('nombre'),
            'fecha' => $request->input('fecha'),
        ]);

        // Almacena información de la cita en la sesión antes de mostrar el mensaje
        session(['citaAgregada' => [
            'id' => $nuevaCita->idCalendario, // Asegúrate de ajustar el nombre de la columna según tu modelo
            'nombre' => $nuevaCita->nombre, // Asegúrate de ajustar el nombre de la columna según tu modelo
            'fecha' => $nuevaCita->fecha, // Asegúrate de ajustar el nombre de la columna según tu modelo
            // Puedes agregar más campos según sea necesario
        ]]);

        // Mensaje de éxito
        $mensaje = "¡Excelente, se agregó correctamente la cita!";

        // Hacer un dd del contenido de la sesión citaAgregada
        dd(session('citaAgregada'));
    } catch (\Exception $e) {
        // Mensaje de error
        $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
        return view('inicio.inicio', compact('error'));
    }
}





public function eliminar($id) {   
    $calendario = Calendario::find($id);

    if ($calendario) {
        // Almacena información de la cita en la sesión antes de eliminarla
        session(['citaEliminada' => [
            'id' => $calendario->idCalendario, // Ajusta el nombre de la columna según tu modelo
            'nombre' => $calendario->nombre, // Ajusta el nombre de la columna según tu modelo
            'fecha' => $calendario->fecha, // Ajusta el nombre de la columna según tu modelo
            // Puedes agregar más campos según sea necesario
        ]]);

        // Elimina la cita
        $calendario->eliminar();

        // Hacer un dd del contenido de la sesión citaEliminada
        dd(session('citaEliminada'));

        // Mensaje de éxito
        $mensaje = "<span class='text-black font-bold'>¡Excelente, se eliminó correctamente la cita!.</span>";
        return view('inicio.inicio', compact('mensaje'));    
    } else {
        // Mensaje de error
        $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
        return view('cita.cita-listar', compact('error'));  
    }
}



}
