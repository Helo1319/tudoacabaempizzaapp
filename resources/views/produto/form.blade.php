@extends('layouts.base')
@section('content')
<nav class="navbar bg-dark fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Editar Produto: {{ $produto->nome }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Editar Produtos</h2>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="/produtos">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cargos">Cargos</a>
          </li>
            </ul>
          </li>
        </ul>
        </form>
      </div>
    </div>
  </div>
</nav>
<form class="mt-5" action="{{route ('produto.update', ['id'=>$produto->id_produto] )}}" method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="mt-3 form-label" for="produto">Nome</label>
    <input class="form-control" type="text" name="nome" id="nome" value="{{ $produto->nome }}">
    <label class="mt-3 form-label" for="imagem">Imagem</label>
    <input class="form-control" type="file" name="imagem" id="imagem" value="">
    <label class="mt-3 form-label" for="descricao">Descrição</label>
    <input class="form-control" type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}">
    <label class="mt-3 form-label" for="observacoes">Observações</label>
    <input class="form-control" type="text" name="observacoes" id="observacoes" value="{{ $produto->observacoes }}">

    <input class="btn btn-success mt-2" type="submit" value="Atualizar">
</form>

@endsection
@section('scripts')

@endsection
