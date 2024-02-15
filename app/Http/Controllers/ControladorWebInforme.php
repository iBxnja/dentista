<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Imagenes;
use App\Models\Cita;
use App\Models\Nota;
use Illuminate\Http\Request;

class ControladorWebInforme extends Controller
{
    public function index(){

        $cliente = New Cliente();
        $aClientes = $cliente->obtenerTodos();

        $totalClientes = Cliente::count();
        $totalImagenes = Imagenes::count();
        $totalCitas = Cita::count();
        $totalNotas = Nota::count();

        return view('informe.informe-listar', compact('totalClientes', 'totalImagenes', 'totalCitas', 'totalNotas', 'aClientes'));
    }
}
