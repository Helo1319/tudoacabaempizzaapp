@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>
<nav class="navbar bg-dark fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Produto: {{ $produto->nome }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Produto: {{ $produto->nome }}</h2>
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
<h2 id="table"> Tipo: {{ $produto->tipo->tipo }} </h2>
<p> Descrição: {!! nl2br($produto->descricao) !!}</p>
@if ($produto->observacoes)
    <p class="alert alert-info">
        {!! nl2br($produto->observacoes) !!}
    </p>
@endif
    <h6>
        <a class="btn btn-success" href="{{ route('produto.createTamanho', ['id_produto'=>$produto->id_produto ]) }}">
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
        @forelse ($produto->tamanhos()->get() as $item)
         <tr>
            <td>
                {{-- editar --}}
                <a class="btn btn-primary" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}">
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
                {!! nl2br($item->observacoes) !!}
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
