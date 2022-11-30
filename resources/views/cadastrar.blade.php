@extends('templates.default')

@section('inicial')
<h1 class="text-center">@if(isset($dadosCadastrados)) Editar @else Cadastrar @endif</h1>
    <hr>
      <div class="col-8 m-auto">

        @if (@isset($dadosCadastrados))

          <form name="formEdit" id="formEdit" method="POST" action="{{url("/$dadosCadastrados->id")}}">
            @method('PUT')
            <input class="form-control" type="text" disabled="disabled" name="id" id="id" value="{{$dadosCadastrados->id}}">

            @else
              <form name="formCad" id="formCad" method="POST" action="{{url('/')}}">
            @endif

            @csrf {{-- o csrf é uma forma de segurança nos forms de laravel, sendo obrigatorio seu uso --}}
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome Completo" value="{{$dadosCadastrados->nome ?? ''}}">
            <input class="form-control" type="number" name="cpf" id="cpf" placeholder="CPF" value="{{$dadosCadastrados->cpf ?? ''}}">
            <input class="form-control" type="text" name="endereço" id="endereço" placeholder="Endereço" value="{{$dadosCadastrados->endereco ?? ''}}">
            <div class="text-center">
                <input class="btn btn-primary" type="submit" value="@if(isset($dadosCadastrados)) Editar @else Cadastrar @endif">
                <a class="btn btn-secondary" type="button" href="{{"/"}}">Voltar</a>
            </div>
        </form>
      </div>
@endsection