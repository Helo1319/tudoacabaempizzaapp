@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>
<nav class="navbar bg-danger fixed-top mb-2" data-bs-theme="success">
  <div class="container-fluid">
    <a class="navbar-brand">Clientes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">clientes</h2>
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
            <a class="nav-link" href="/cargos">Usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cargos">Cliente</a>
          </li>
            </ul>
          </li>
        </ul>
        </form>
      </div>
    </div>
  </div>
</nav>
    <a id="table" class="btn btn-outline-success" href="{{ route( 'cliente.create' ) }}">
      Administrar Cliente
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-1">ID</th>
                <th>Nome</th>
                <th>Celular</th>
                <th>E-mail</th>
                <th>Observação</th>

            </tr>
        </thead>
        <tbody>
            @foreach($clientes->get() as $cliente)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('cliente.edit', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('cliente.show', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-outline-danger" href="{{ route('cliente.destroy', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $cliente->id_cliente}}
                </td>
                <td>
                    {{ $cliente->nome }}
                </td>
                <td>
                    {{ $cliente->celular }}
                </td>
                <td>
                    {{ $cliente->email}}
                </td>
                <td>
                    {{ $cliente->observacoes }}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@section('scripts')

@endsection
