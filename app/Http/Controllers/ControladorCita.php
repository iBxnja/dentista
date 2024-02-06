<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Cita;

class ControladorCita extends Controller{
    

    public function index(){
        $cita = new Cita();
        $aCita = $cita->obtenerTodos();
        $nuevaCita = new Cita();
        $aaCita = $nuevaCita->obtenerTodosConNombreCliente();
        return view('citas.cita-listar', compact('aCita', 'aaCita'));
    }
    public function enviarNombreApellido(){
        $cliente = new Cliente();
        $aCliente = $cliente->obtenerNombreApellido();
        $cita = new Cita();
        $aCita = $cita->obtenerTodos();
        return view('citas.cita-nuevo', compact('aCliente','aCita'));
    }

    public function guardar(Request $request)
    {
        $cita = new Cita();
        $cita->cargarDesdeRequest($request);
    
        if (empty($cita->fk_idCliente) || empty($cita->dia) || empty($cita->numero) || empty($cita->mes) || empty($cita->hora) || empty($cita->consulta)) {
            $error = "¡Parece que ocurrió un error!.";
            return view('inicio.inicio', compact('error'));
        } else {
            $cita->guardar();
    
            // Obtén la información del cliente asociado a la cita
            $cliente = $cita->cliente;
    
            $mensaje = "¡Excelente, se agregó correctamente la cita con " . $cliente->nombre . " " . $cliente->apellido . "!";
            $aCita = $cita->obtenerTodos();
            return view('inicio.inicio', compact('mensaje'));
        }
    }


    public function eliminar($id) {   
        $cita = Cita::find($id);
        $cliente = $cita->cliente;
        $mensajeRojo = "¡Excelente, se eliminó correctamente la cita con " . $cliente->nombre . " " . $cliente->apellido . "!";
        $error = "¡Parece que ocurrió un error!.";
        if ($cita) {
            $cita->eliminar();
            return view('inicio.inicio', compact('mensajeRojo'));    
        } else {
            return view('cita.cita-listar', ['error' => $error]);
        }
    }


}
