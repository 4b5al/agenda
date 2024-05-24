<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consultas;
use App\Models\Profissional;


class ConsultasController extends Controller
{
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
        $medicos = Profissional::select('id','nome', 'telefone', 'email', 'crm', 'categoria_id')->get();
        $pacientes = Profissional::select('id','nome', 'telefone', 'email')->get();

        return view('consultas', compact('medicos', 'pacientes'));
    }
}
