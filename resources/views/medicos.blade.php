@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{-- <div class="col-md 4"> --}}

            <div class="card">
                <div class="card-header">
                    <!-- {{ __('Agenda de hoje') }} -->
                    <div class="toast-header">
                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                        <strong class="me-auto">Médicos cadastrados</strong>
                        <!-- <small>11 mins ago</small> -->
                        <button type="button" class="btn btn-success">
                            <a class="nav-link" href="{{ route('createMedico') }}">{{ __('Novo +') }}</a>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>                                  
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">CRM</th>
                                <th scope="col">Especialidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{dd($profissional)}} --}}
                            @foreach ($profissional as $medico)
                            
                            <tr>
                                <td>{{$medico->nome}}</td>
                                <td>{{$medico->telefone}}</td>
                                <td>{{$medico->email}}</td>
                                <td>{{$medico->crm}}</td>
                                <td>{{$medico->categorias->nome}}</td>
                                <td>
                                   <a href="{{route('editarmedico', $medico->id)}}">editar</a> 
                                </td>
                                <td><td>
                                   <a href="{{route('excluir', $medico->id)}}">excluir</a> 
                                </td></td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
