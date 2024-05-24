<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Profissional;

class ProfissionalController extends Controller
{
    //
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
   
        // $nomes = Categorias::select('nome')->get();
        // $medicos = Profissional::select('id','nome', 'telefone', 'email', 'crm', 'categoria_id')->get();
        $medicos = Profissional::with('Categorias')->get();
        // dd($medicos);
        return view('medicos', compact('medicos'));
    


        
    }
}
