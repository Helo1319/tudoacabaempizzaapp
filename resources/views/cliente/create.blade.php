@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>

<form id="table" action="{{ route('cliente.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="cliente">Novo Cliente</label>
    <input class="form-control" type="text" name="nome" id="nome"><br>
    <label class="form-label" for="cliente">Celular</label>
    <input class="form-control" type="tel" name="celular" id="celular"><br>
    <label class="form-label" for="cliente">E-mail</label>
    <input class="form-control" type="email" name="email" id="email"><br>
    <label class="form-label" for="cliente">Observações</label>
    <input class="form-control" type="text" name="observacoes" id="observacoes"><br>
       <input class="btn btn-outline-success" type="submit" value="Criar">

</form>
    @include('cliente.menuCliente')
@endsection
@section('scripts')

@endsection
