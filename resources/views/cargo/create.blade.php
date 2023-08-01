@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
@include('cargo.menuCargos')
<form id="table" action="{{ route('cargos.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="cargo">Novo Cargo</label>
    <input class="form-control" type="text" name="cargo" id="cargo"><br>
       <input class="btn btn-success" type="submit" value="Criar">
</form>

@endsection
@section('scripts')

@endsection
