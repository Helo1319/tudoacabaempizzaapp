@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
@include('cargo.menuCargos')
<form id="table" action="{{ route('cargos.store', ['id'=>$cargo->id_cargo]) }}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="cargo"> Editar Cargo</label>
    <input class="form-control" type="text" name="cargo" id="cargo"
    value="{{
        $cargo && $cargo->cargo
        != '' ?
        $cargo->cargo : old(cargo)
       }}" ><br>
       <input class="btn btn-outline-success" type="submit" value="Atualizar">
</form>

@endsection
@section('scripts')

@endsection
