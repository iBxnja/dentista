<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorNota extends Controller
{
    public function index(){

        return view('notas.notas-listar');
    }
}
