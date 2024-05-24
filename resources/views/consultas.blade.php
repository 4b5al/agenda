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
      
      <form method="POST" action="{{ route('store.consultas') }}">
      @csrf
        <input type="hidden" name="id" >     
        <div class="mb-3">
          <label for="paciente" class="form-label">Selecione o paciente</label>
          <input name="paciente" value="{{$profissional->nome ?? old('paciente')}}" type="text" class="form-control" id="paciente" aria-describedby="pacienteHelp" placeholder="Nome completo" required>
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
          <label for="profissional" class="form-label">Selecione o profissional</label>
          <input name="profissional" value="{{$profissional->telefone ?? old('profissional')}}" type="tel" class="form-control" id="profissional" aria-describedby="profissionalHelp"  placeholder="00-00000.0000" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" required>
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
          <label for="data" class="form-label">Data</label>
          <input name="data" value="{{$profissional->email ?? old('data')}}" type="date" class="form-control" id="data" aria-describedby="dataHelp" placeholder="exemplo@exemplo.com" required>
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="hopra" class="form-label">Horário</label>
          <input name="hora" value="{{$profissional->crm ?? old('hora')}}" type="time" class="form-control" id="crm" placeholder="00000" pattern="[0-9]{5}" required>
        </div>
              {{-- {{dump($nomes)}} --}}
        <div class="mb-3">
          <label  for="especialidade" class="form-label">Especialidade médica</label>
          <select name="categoria_id" id="disabledSelect" class="form-select">
             <option selected>Selecione a especialidade</option>
            {{-- @foreach ($nomes as $nome)
              
              <option {{ $nome->categoria_id == $nome->id ? 'selected' : $nome->id }} value="{{ $nome->id }}">{{ $nome->nome  }}</option>      
            @endforeach   --}}
          </select>
          {{-- <input value="{{$profissional->categproia_id ?? old('especialidade')}}" type="hidden" class="form-control" id="especialidade" placeholder="00000" pattern="[0-9]{5}" required>  --}}
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
