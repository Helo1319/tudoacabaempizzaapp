@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
<nav class="navbar bg-danger fixed-top" data-bs-theme="success">
  <div class="container-fluid">
    <a class="navbar-brand">Cadastrar Produto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Cadastrar Produto</h2>
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



<form id="table" action="{{ route('produto.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="Produto">Nome</label>
    <input class="form-control" type="text" name="Produto" id="Produto"><br>

    <label class="form-label" for="TipoProduto">Tipo do Produto</label>
    @foreach ($tiposProduto::all() as $tipo)
    <select class="form-control" name="TipoProduto" id="TipoProduto">
      <option value="">{{ $tipo->tipo_produto }}</option>
    </select>
    @endforeach
    <label class="mt-3 form-label" for="imagem">Imagem</label>
    <input class="form-control" type="file" name="imagem" id="imagem" value="">
    <label class="mt-3 form-label" for="descricao">Descrição</label>
    <input class="form-control" type="text" name="descricao" id="descricao" value="">
    <label class="mt-3 form-label" for="observacoes">Observações</label>
    <input class="form-control" type="text" name="observacoes" id="observacoes" value="">

    <input class="btn btn-outline-success mt-3" type="submit" value="Criar">
</form>

@endsection
@section('scripts')

@endsection
