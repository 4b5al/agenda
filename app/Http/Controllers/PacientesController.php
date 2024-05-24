<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacientes;

class PacientesController extends Controller
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
        return view('Pacientes');
    }


    public function store(Request $request)
    {   

            $paciente = new Pacientes();
            $paciente->nome = $request->input('nome');
            $paciente->telefone = $request->input('telefone');
            $paciente->email = $request->input('email');
            
            $paciente->save();
            

        return view('Pacientes');
    
    }
}
