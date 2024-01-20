<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    public function index(){

        return view('cliente.cliente-listar');
    }
    public function nuevo(){

        return view('cliente.cliente-nuevo');
    }
}
