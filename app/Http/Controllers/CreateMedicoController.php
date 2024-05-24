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
        $medicos = Profissional::select('id','nome', 'telefone', 'email', 'crm', 'categoria_id')->get();
        // dd($nomes);
        return view('createmedico', compact('nomes', 'medicos'));
    }

    public function store(Request $request)
    {   
        // dd($request);

            // if($request->input('_token') != '' && $request->input('id') == ''){
            
            // $regras = [
            //     'nome' => 'required|max:40',
            //     'telefone' => 'required|max:11',
            //     'email' => 'required',
            //     'crm' => 'required|max:5',
            //     'categoria_id' => 'required'
            // ];
            // dd($regras);
            
            // $feedback = [
            //     'required' => 'Todos os campos devem ser preenchidos'
            // ];
            
            // $request->validate($regras, $feedback);

            $profissional = new Profissional();
            $profissional->nome = $request->input('nome');
            $profissional->telefone = $request->input('telefone');
            $profissional->email = $request->input('email');
            $profissional->crm = $request->input('crm');
            $profissional->categoria_id = $request->input('categoria_id'); // Certifique-se de que categoria_id está presente no request
            $profissional->save();
            // $profissional = new Profissional();
            // $profissional->create($request->all());
            // $profissional->save();
            

        return view('medicos');
        

        //edição
        // if($request->input('_token') != '' && $request->input('id') != ''){
        //     $profissional = Profissional::find($request->input('id'));

        //     $subir = $profissional->update($request->all());
    
        // }




        // $request->validate([
        //     'nome' => 'required|max:40',
        //     'telefone' => 'required|max:11',
        //     'email' => 'required',
        //     'crm' => 'required|max:5',
        //     'categoria_id' => 'required',
        // ]);

        
        // $profissionals = Profissional::create($request->all());

    
    }
}
