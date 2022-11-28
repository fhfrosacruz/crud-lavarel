@extends('templates.default')

@section('inicial')
<h1 class="text-center">Cadastrar</h1>
    <hr>
      <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{url('/')}}">
            @csrf {{-- o csrf é uma forma de segurança nos forms de laravel, sendo obrigatorio seu uso --}}
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome Completo">
            <input class="form-control" type="number" name="cpf" id="cpf" placeholder="CPF">
            <input class="form-control" type="text" name="endereço" id="endereço" placeholder="Endereço">
            <div class="text-center">
                <input class="btn btn-primary" type="submit" value="cadastrar">
            </div>
        </form>
      </div>
@endsection