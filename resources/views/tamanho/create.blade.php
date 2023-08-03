@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
@include('tamanho.menuTamanho')
<form id="table" action="{{ route('tamanho.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="tamanho">Novo Tamanho</label>
    <input class="form-control" type="text" name="tamanho" id="tamanho"><br>
       <input class="btn btn-success" type="submit" value="Criar">
</form>

@endsection
@section('scripts')

@endsection
