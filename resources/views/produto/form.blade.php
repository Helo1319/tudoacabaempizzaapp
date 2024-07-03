@extends('layouts.base')
@section('content')

<form class="mt-5" action="{{route ('produto.update', ['id'=>$produtos->id_produto] )}}" method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="mt-3 form-label" for="produto">Nome</label>
    <input class="form-control" type="text" name="nome" id="nome" value="{{ $produtos->nome }}">
    <label class="mt-3 form-label" for="imagem">Imagem</label>
    <input class="form-control" type="file" name="imagem" id="imagem" value="">
    <label class="mt-3 form-label" for="descricao">Descrição</label>
    <input class="form-control" type="text" name="descricao" id="descricao" value="{{ $produtos->descricao }}">
    <label class="mt-3 form-label" for="observacoes">Observações</label>
    <input class="form-control" type="text" name="observacoes" id="observacoes" value="{{ $produtos->observacoes }}">

    <input class="btn btn-outline-success mt-2" type="submit" value="Criar" >
</form>

@endsection

@include('produto.menuProduto')

@section('scripts')

@endsection
