@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="card">
      <div class="card-header">
        <!-- {{ __('Agenda de hoje') }} -->
        <div class="toast-header">
          <!-- <img src="..." class="rounded me-2" alt="..."> -->
          <strong class="me-auto">Crie uma Consulta</strong>
                      <!-- <small>11 mins ago</small> -->
          <!-- <button type="button" class="btn btn-success">Novo +</button> -->
        </div>
      </div>
      <div class="col-md-8 center">
      <div class="card-body">
      
      <form method="POST" action="{{ route('store.consultas') }}">
      @csrf
        <input type="hidden" name="id" >     
        <div class="mb-3">
          <label  for="profssional_id" class="form-label">Medico</label>
          <select name="profissional_id" id="disabledSelect" class="form-select">
             <option selected>Selecione medico</option>
            @foreach ($medicos as $medico)
              
              <option {{ $medico->id == old('id', $medico->id) ? 'selected' : ''  }} value="{{ $medico->id }}">{{ $medico->nome  }}</option>      
            @endforeach  
          </select>
        </div>
        
        <div class="mb-3">
          <label  for="paciente_id" class="form-label">Especialidade médica</label>
          <select name="paciente_id" id="disabledSelect" class="form-select">
             <option selected>Selecione a especialidade</option>
            @foreach ($pacientes as $paciente)
              
              <option {{ $paciente->id == old('id', $paciente->id) ? 'selected' : ''  }} value="{{ $paciente->id }}">{{ $paciente->nome  }}</option>      
            @endforeach  
          </select>
        </div>

        <div class="mb-3">
          <label for="data" class="form-label">Data</label>
          <input name="data" value="{{$profissional->data ?? old('data')}}" type="date" class="form-control" id="data" aria-describedby="dataHelp"  required>
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="hora" class="form-label">Horário</label>
          <input name="hora" value="{{$profissional->hora ?? old('hora')}}" type="time" class="form-control" id="crm" placeholder="00000" pattern="[0-9]{5}" required>
        </div>
              {{-- {{dump($nomes)}} --}}
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
