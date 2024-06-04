@extends('layouts.app')

@section('content')
<style>
  .blocos {
   display: none;
 }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                      <label for="medicos" class="form-label">Selecione um profissional</label><br>
                      <select class="form-control" id="medicos" name="medicos">
                        <option selected>Profssional</option>
                        @foreach ($medicos as $medico)
                          
                        <option {{ $medico->categoria_id == $medico->id ? 'selected' : $medico->id }} value="{{ $medico->id }}">{{ $medico->nome  }}</option>      
                        @endforeach
                      </select>
                    </div>
                      

                    {{-- {{dd($consultas)}} --}}
                    @foreach ($consultas as $consulta)
                    <div id="{{$consulta->profissional_id}}" class="blocos">
                      {{-- <h1 {{$$consulta->profissional_id == $consultas->id}}>{{$consultas->}}</h1> --}}
                      <table class="table">
                        <thead>
                          <tr>                                  
                            {{-- <th scope="col"></th> --}}
                            <th scope="col">Paciente</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            {{-- <th scope="col">Especialidade</th> --}}
                          </tr>
                        </thead>
                        {{-- @foreach ($consultas as $consulta) --}}
                        <tbody>
                          {{-- {{dd($profissional)}} --}}
                          
                          <tr>
                            {{-- <td>{{$consulta->Profissional->nome}}</td> --}}
                            <td>{{$consulta->Pacientes->nome}}</td>
                            <td>{{$consulta->hora}}</td>
                            <td>{{$consulta->data}}</td>
                            <td>
                              <a href="{{route('editar.consulta', $consulta->id)}}">editar</a> 
                           </td>
                           <td><td>
                              <a href="{{route('excluir.consulta', $consulta->id)}}">excluir</a> 
                           </td></td>
                          </tr>
                        </tbody>
                        {{-- @endforeach --}}
                      </table>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<script>
  $(function() {
    $('.form-control').change(function(){
      $('.blocos').hide();
      $('#' + $(this).val()).show();
    });
  });
</script>
@endsection
