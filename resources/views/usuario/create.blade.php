@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>

<form id="table" action="{{ route('usuario.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="cliente">Novo Usuário</label>
    <input class="form-control" type="text" name="nome" id="nome"><br>
    <label class="form-label" for="cliente">E-mail</label>
    <input class="form-control" type="email" name="email" id="email"><br>
    <label class="form-label" for="cliente">Senha</label>
    <input class="form-control" type="password" name="password" id="password"><br>
       <input class="btn btn-outline-success" type="submit" value="Criar">

</form>
    @include('usuario.menuUsuario')
@endsection
@section('scripts')

@endsection
