@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
@include('tamanho.menutamanhos')
<form id="table" action="{{
    $tamanho ?
        route('tamanhos.update', ['id'=>$tamanho->id_tamanho])
        :
        route('tamanhos.store')
 }}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="tamanho"> Editar tamanho</label>
    <input class="form-control" type="text" name="tamanho" id="tamanho"
    value="{{
        $tamanho && $tamanho->tamanho
        != '' ?
        $tamanho->tamanho : old(tamanho)
       }}" ><br>
       <input class="btn btn-outline-success" type="submit" value="Atualizar">
</form>

@endsection
@section('scripts')

@endsection
