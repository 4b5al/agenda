<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Profissional;

class CreateMedicoController extends Controller
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
        $nomes = Categorias::select('id','nome')->get();
        // $profissional= Profissional::select()->get();
        // dd($nomes);
        return view('createmedico', compact('nomes'));
    }

        public function store(Request $request)
        {     
            // if ($request->has('nome') && $request->has('telefone')) {
                $profissional = new Profissional();
                $profissional->nome = $request->input('nome');
                $profissional->telefone = $request->input('telefone');
                $profissional->email = $request->input('email');
                $profissional->crm = $request->input('crm');
                $profissional->categoria_id = $request->input('categoria_id'); // Certifique-se de que categoria_id está presente no request
                $profissional->save(); 
            // }           

            return redirect()->route('createMedico');
            
        }

    public function editar($id){
        //editar
        $profissional = Profissional::find($id);
        // dd($profissional);
        $nomes = Profissional::with('Categorias')->get();
        $nomes = Categorias::select('id','nome')->get();

        // $profissional->update($request->all());

        return view('createmedico', compact('profissional', 'nomes'));
        //dd($publicacao);
    }

    public function excluir($id){
        //excluir
        Profissional::find($id)->delete();

        return redirect()->route('medicos');
    }
}
