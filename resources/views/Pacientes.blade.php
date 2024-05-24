@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="card">
      <div class="card-header">
        <!-- {{ __('Agenda de hoje') }} -->
        <div class="toast-header">
          <!-- <img src="..." class="rounded me-2" alt="..."> -->
          <strong class="me-auto">Agenda de hoje</strong>
                      <!-- <small>11 mins ago</small> -->
          <!-- <button type="button" class="btn btn-success">Novo +</button> -->
        </div>
      </div>
      <div class="col-md-6 center">
      <div class="card-body">
      
      <form method="POST" action="{{ route('store.pacientes') }}">
      @csrf
        <input type="hidden" name="id" >     
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input name="nome" value="{{$paciente->nome ?? old('nome')}}" type="text" class="form-control" id="nome" aria-describedby="NomeHelp" placeholder="Nome completo" required>
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input name="telefone" value="{{$paciente->telefone ?? old('telefone')}}" type="tel" class="form-control" id="telefone" aria-describedby="telefoneHelp"  placeholder="00-00000.0000" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" required>
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input name="email" value="{{$paciente->email ?? old('email')}}" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="exemplo@exemplo.com" required>
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
