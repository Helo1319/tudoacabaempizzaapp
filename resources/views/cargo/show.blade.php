@extends('layouts.base')
@section('content')
<style>
    #table{
        margin-top: 62px;
    }
</style>
<nav class="navbar bg-danger fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Cargo: {{ $cargo->cargo }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Cargo: {{ $cargo->cargo }}</h2>
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
<h2 id="table"> Relação de Usuários com esse cargo</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cargo->usuarios()->get() as $usuario)
         <tr>
            <td>
                <a class="btn btn-outline-primary" href="#">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a class="btn btn-outline-success" href="#">
                    <i class="fa-solid fa-eye"></i>
                </a>
            </td>
            <td>
                {{ $usuario->nome}}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">
                Nenhum usuário com esse cargo
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
@section('scripts')

@endsection
