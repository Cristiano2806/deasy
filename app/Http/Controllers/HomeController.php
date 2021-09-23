<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sintomas;
use App\Pacientes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sintomas = Sintomas::get();
        
        return view('home', compact('sintomas'));
    }

    public function sintomas(Request $request)
    {
        //$sintomas = Sintomas::get();
        $user = auth()->user();
        $paciente = new Pacientes();
        $paciente->sintomas = $request->input_sintoma;
        $paciente->descricao = $request->descricao;
        $paciente->user_id = $user->id;
        $paciente->save();

        return redirect('/tratamentos');
    } 
}
