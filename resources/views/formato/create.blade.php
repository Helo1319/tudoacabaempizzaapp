@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
@include('formato.menuFormato')
<form id="table" action="{{ route('formato.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="formato">Novo Formato</label>
    <input class="form-control" type="text" name="formato" id="formato"><br>
    <label class="form-label" for="formato">Preço</label>
    <input class="form-control" type="text" name="preco" id="preco"><br>
       <input class="btn btn-success" type="submit" value="Criar">
</form>

@endsection
@section('scripts')

@endsection
