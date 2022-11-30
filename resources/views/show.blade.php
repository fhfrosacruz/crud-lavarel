@extends('templates.default')

@section('inicial')
    <h1 class="text-center">Visualizar</h1>
    <hr>
      <div class="col-8 m-auto">
        <table class="table text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">Endereço</th>
            </tr>
          </thead>
          <tbody>
           <tr>
              <td>{{$dadosCadastrados->id}}</td>
              <td>{{$dadosCadastrados->nome}}</td>
              <td>{{$dadosCadastrados->cpf}}</td>
              <td>{{$dadosCadastrados->endereco}}</td>
           </tr>
          </tbody>
        </table>
        <div class="text-center ">
          <a href="{{('/')}}">
            <button class="btn btn-primary">voltar</button>
          </a>
        </div>
    </div>
@endsection