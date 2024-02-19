<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Odontograma;

class ControladorOdontograma extends Controller
{
    public function index(){

        return view('odontograma.odontograma-listar');
    }


}
