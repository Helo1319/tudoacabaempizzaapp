@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>
<nav class="navbar bg-danger fixed-top" data-bs-theme="success">
  <div class="container-fluid">
    <a class="navbar-brand">Produto: {{ $produtos->nome }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Produto: {{ $produtos->nome }}</h2>
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
          <li class="nav-item">
            <a class="nav-link" href="/usuario">Usuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/clientes">Cliente</a>
          </li>
            </ul>
          </li>
        </ul>
        </form>
      </div>
    </div>
  </div>
</nav>
<h2 id="table"> Tipo: {{ $produtos->tipo->tipo }} </h2>
<p> Descrição: {!! nl2br($produtos->descricao) !!}</p>
@if ($produtos->descricao)
    <p class="alert alert-info">
        {!! nl2br($produtos->descricao) !!}
    </p>
@endif
    <h6>
        <a class="btn btn-outline-success" href="{{ route('produto.createTamanho', ['id_produto'=>$produtos->id_produto ]) }}">
            Adicionar novo tamanho
        </a>
    </h6>
<table class="table table-striped table-hover">

    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th>Tamanho</th>
            <th>Preço</th>
            <th>Obs.:</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($produtos->tamanhos()->get() as $item)
         <tr>
            <td>
                {{-- Editar --}}
                <a class="btn btn-outline-primary" href="{{ route('produto.edit', ['id'=>$produtos->id_produto]) }}">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
            <td>
                {!! $item->tamanho->tamanho !!}
            </td>
            <td>
                {{ $item->preco }}
            </td>
            <td>
                {!! nl2br($item->descricao) !!}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">
                Nenhum tamanho definido para esse produto
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
@section('scripts')

@endsection
