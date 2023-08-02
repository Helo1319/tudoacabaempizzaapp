@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>

<form id="table" action="{{ route('cliente.update', ['id'=>$clientes->id_cliente]) }}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="Cliente">Cliente</label>
    <input class="form-control" type="text" name="nome" id="nome">
    <br>
    <input class="btn btn-outline-success" type="submit" value="Atualizar">
</form>
    @include('cliente.menuCliente')
@endsection
@section('scripts')

@endsection
