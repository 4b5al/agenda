<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pacientes;
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
        $pacientes = Pacientes::select('id','nome', 'telefone', 'email')->get();

        return view('consultas', compact('medicos', 'pacientes'));
    }


    public function store(Request $request){
// dd($request);
        $consulta = new Consultas();
            $consulta->paciente_id = $request->input('paciente_id');
            $consulta->profissional_id = $request->input('profissional_id');
            $consulta->data = $request->input('data');
            $consulta->hora = $request->input('hora');
            // $consulta->categoria_id = $request->input('categoria_id'); // Certifique-se de que categoria_id está presente no request
            $consulta->save();
        
            return redirect()->route('home');

    }
}
