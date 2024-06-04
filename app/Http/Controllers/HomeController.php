<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacientes;
use App\Models\Consultas;
use App\Models\Profissional;

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
    public function index(Request $request)
    {
        $medicos = Profissional::select('id','nome', 'telefone', 'email', 'crm', 'categoria_id')->get();
        
        $consultas = Consultas::with([  'Profissional', 'Pacientes'])->select('id', 'profissional_id', 'paciente_id', 'data', 'hora')->get();
        // $consultas = Consultas::with([  'Profissional', 'Pacientes'])->get();
        // dd($consultas);


        return view('home', compact('medicos', 'consultas'));
    }

    public function listar(Request $request){

        // $consultas = Consultas::with(['professionals', 'pacientes'])
        //     ->select('medico_id', 'paciente_id', 'data', 'hora')
        //     ->get();

            dd($consultas);

            return view('home');
    }


    public function editar($id){
        //editar
        $consultas = Consultas::find($id);
        // dd($profissional);
        $pacientes = Pacientes::select('id','nome', 'telefone', 'email')->get();

        
        $medicos = Profissional::select('id','nome', 'telefone', 'email', 'crm', 'categoria_id')->get();
        
        $consultas = Consultas::with([  'Profissional', 'Pacientes'])->select('id', 'profissional_id', 'paciente_id', 'data', 'hora')->get();

        // $profissional->update($request->all());

        return view('consultas', compact('consultas', 'medicos', 'pacientes'));
        //dd($publicacao);
    }

    public function excluir($id){
        //excluir
        Consultas::find($id)->delete();

        return redirect()->route('home');
    }
}
