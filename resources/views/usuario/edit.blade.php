@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>


<form id="table" action="{{ route('usuario.update',['id'=>$user->id_user])}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="cliente">Editar Usuário</label>
    <input class="form-control" type="text" name="nome" id="nome"
    value="{{$user->nome}}"><br>
    <label class="form-label" for="cliente">E-mail</label>
    <input class="form-control" type="email" name="email" id="email"
    value="{{$user->email}}"><br>
    <label class="form-label" for="cliente">Senha</label>
    <input class="form-control" type="password" name="password" id="password"
    value=""><br>
       <input class="btn btn-outline-success" type="submit" value="Atualizar">

</form>
    @include('usuario.menuUsuario')
@endsection
@section('scripts')

@endsection
