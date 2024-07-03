@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>

<form id="table" action="{{
    $usuario ?
    route('usuario.update', ['id'=>$usuario->id_usuario])
    :
    route('usuario.store') }}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="Usuario">Usuario</label>
    <input class="form-control" type="text" name="nome" id="nome">
    <br>
    <input class="btn btn-outline-success" type="submit" value="Atualizar">
</form>
    @include('usuario.menuUsuario')
@endsection
@section('scripts')

@endsection
