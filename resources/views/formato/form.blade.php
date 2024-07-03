@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
@include('formato.menuFormato')
<form id="table" action="{{
    $formato ?
        route('formato.update', ['id'=>$formato->id_formato])
        :
        route('formato.store')
 }}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="formato"> Editar Formato</label>
    <input class="form-control" type="text" name="formato" id="formato"
    value="{{
        $formato && $formato->formato
        != '' ?
        $formato->formato : old('formato')
       }}" ><br>
       <input class="btn btn-outline-success" type="submit" value="Atualizar">
</form>

@endsection
@section('scripts')

@endsection
