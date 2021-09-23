<?php

namespace App\Http\Controllers;


use App\Pacientes;
use App\Tratamentos;
use App\Sintomas;
use Illuminate\Http\Request;

class TratamentosController extends Controller
{
    public function tratamentos() {
        $pacientes = Pacientes::first();
        $array = $pacientes->sintomas;
        $tratamentos = Tratamentos::get();
        return view('tratamentos', compact('pacientes', 'tratamentos', 'array'));
    }
}
