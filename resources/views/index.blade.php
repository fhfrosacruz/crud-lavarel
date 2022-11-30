@extends('templates.default')

@section('inicial')
    <h1 class="text-center">Crud Laravel</h1>
    <hr>
      <div class="text-center mt-3 mb-4">
        <a href="{{('/cadastrar')}}">
          <button class="btn btn-success"> Cadastrar</button>
        </a>
      </div>
    <div class="col-8 m-auto">
      @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($dadosCadastrados as $item)
             <tr>
              <th scope="row">{{$item->id}}</th>
                <td>{{$item->nome}}</td>
                <td>{{$item->cpf}}</td>
                <td>{{$item->endereco}}</td>
                <td>
                  <a href="{{url("show/$item->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
                  </a>
                  <a href="{{url("cadastrar/$item->id/editar")}}">
                    <button class="btn btn-primary">Editar</button>
                  </a>
                  <a href="{{url("cadastrar/$item->id")}}" class="del_for_js">
                    <button class="btn btn-danger">Deletar</button>
                  </a>
                </td>
             </tr>
                 
             @endforeach
            </tbody>
          </table>
    </div>
@endsection