@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;

  }
</style>

<nav class="navbar bg-danger fixed-top" data-bs-theme="success">
  <div class="container-fluid">
    <a class="navbar-brand">Produtos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Produtos</h2>
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
            <a class="nav-link" href="/usuario">Usuários</a>
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

    <a id="table" class="btn btn-success" href="{{ route( 'produto.create' ) }}">
      Cadastrar Produto
    </a>

    <table class="table table-striped table-hover col-12">
        <thead>
            <tr>
                <th class="col-1">Ações</th>
                {{-- <th class="col-1"></th> --}}
                <th class="col-1">ID</th>
                <th class="col-1">Produto</th>
                <th class="col-1">Observações</th>
                <th class="col-1">Qtd Tamanhos</th>
            </tr>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-outline-danger" href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>

                <td>
                    <img src="#" alt="">
                </td>
                <td>
                    {{ $produto->nome }}
                </td>
                <td>
                    {{ $produto->id_produto}}
                </td>

                <td>{{ ($produto->observacoes) }}</td>
                <td>

                    {!!
                        $produto->tamanhos()->count()
                    !!}

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>



@endsection

@section('scripts')

@endsection
