<?php

namespace App\Http\Controllers;
use App\Models\Odontograma;
use App\Models\Cliente;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ControladorOdontograma extends Controller
{
    public function index(){
        $odontograma = New Odontograma();
        $aOdontograma = $odontograma->obtenerTodos();

        return view('odontograma.odontograma-listar', compact('aOdontograma'));
    }
    public function enviarNombreApellido(){
        $cliente = new Cliente();
        $aCliente = $cliente->obtenerNombreApellido();
        $odontograma = new Odontograma();
        $aOdontograma = $odontograma->obtenerTodos();
        return view('odontograma.odontograma-nuevo', compact('aCliente','aOdontograma'));
    }

    public function guardar(Request $request){
        // dd($request->all());
        $odontograma = new Odontograma();
        $odontograma->cargarDesdeRequest($request);

        if (empty($odontograma->fk_idCliente) || empty($odontograma->doctora)){
            $error = "<span class='text-black font-bold'>¡Parece que ocurrió un error!.</span>";
            return view('inicio.inicio', compact('error'));
        } else {
            // dd('bien, se ha agregado');
            $odontograma->guardar();
            session(['odontograma' => [
                'id' => $odontograma->idOdontograma,
                'piezasPadecientes' => $odontograma->piezasPadecientes,
                'infantil' => $odontograma->infantil,
                'adulto' => $odontograma->adulto,
                'mayor' => $odontograma->mayor,
                'doctora' => $odontograma->doctora,
                'cariado' => $odontograma->cariado,
                'obturado' => $odontograma->obturado,
                'perdida' => $odontograma->perdida,
                'extraccion' => $odontograma->extraccion,
                'sano' => $odontograma->sano,
                'observacion' => $odontograma->observacion,
                'fk_idCliente' => $odontograma->fk_idCliente,
            ]]);
            
            // Hacer un dd de la información del cliente en la sesión
            dd(session('odontograma'));
        }




    }

}
