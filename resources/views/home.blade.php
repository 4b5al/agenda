@extends('layouts.app')

@section('content')
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

                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Médico responsável</th>
                            <th scope="col">Data</th>
                            <th scope="col">Horário </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Diogo Alves de França</th>
                            <td>Mark Zuckenberg</td>
                            <td>12/12/2222</td>
                            <td>17:00</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
