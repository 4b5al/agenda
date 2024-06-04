@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="card">
      <div class="card-header">
        <!-- {{ __('Agenda de hoje') }} -->
        <div class="toast-header">
          <!-- <img src="..." class="rounded me-2" alt="..."> -->
          <strong class="me-auto">cadastrar medico</strong>
                      <!-- <small>11 mins ago</small> -->
          <!-- <button type="button" class="btn btn-success">Novo +</button> -->
        </div>
      </div>
      <div class="col-md-6 center">
      <div class="card-body">
      
        <form method="POST" action="{{ route('store') }}">
          {{-- {{dd($profissional)}} --}}
        @csrf
          <input type="hidden" name="id" > 
             
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input name="nome" value="{{$profissional->nome ?? old('nome')}}" type="text" class="form-control" id="nome" aria-describedby="NomeHelp" placeholder="Nome completo" required>
          </div>

          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input name="telefone" value="{{$profissional->telefone ?? old('telefone')}}" type="tel" class="form-control" id="telefone" aria-describedby="telefoneHelp"  placeholder="00-00000.0000" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input name="email" value="{{$profissional->email ?? old('email')}}" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="exemplo@exemplo.com" required>
          </div>

          <div class="mb-3">
            <label for="crm" class="form-label">CRM</label>
            <input name="crm" value="{{$profissional->crm ?? old('crm')}}" type="tel" class="form-control" id="crm" placeholder="00000" pattern="[0-9]{5}" required>
          </div>
                
          <div class="mb-3">
            <label  for="especialidade" class="form-label">Especialidade médica</label>
            <select name="categoria_id" id="disabledSelect" class="form-select">
               <option selected>Selecione a especialidade</option>
              @foreach ($nomes as $nome)      
                
              <option {{ $nome->categoria_id == $nome->id ? 'selected' : $nome->id }} value="{{ $nome->id ?? old('id')}}">{{ $nome->nome  }}</option>      
              @endforeach  
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
