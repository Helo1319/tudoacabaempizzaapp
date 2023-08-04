@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;

  }

</style>


<form id="table" action="{{ route('produto.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="Produto">Nome</label>
    <input class="form-control" type="text" name="nome" id="nome"><br>
    <label class="form-label" for="id_tip_prod">Tipo do Produto</label>
    <select class="form-control" name="id_tip_prod" id="id_tip_prod">
    @foreach ($tiposProduto::all() as $tipo)
      <option value="{{ $tipo->id_tip_prod }}">
        {{ $tipo->tipo }}
    </option>
    @endforeach

    </select>
    <label class="mt-3 form-label" for="foto">Imagem</label>
    <input class="form-control" type="file" name="foto" id="foto" value="">

    <label class="mt-3 form-label" for="descricao">Descrição</label>
    <input class="form-control" type="text" name="descricao" id="descricao" value="">

    <label class="mt-3 form-label" for="observacoes">Observações</label>
    <input class="form-control" type="text" name="observacoes" id="observacoes" value="">

    <input class="btn btn-outline-success mt-3" type="submit" value="Criar">

</form>

@endsection
    @include('produto.menuProduto')
@section('scripts')

@endsection
