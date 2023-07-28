@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>
<nav class="navbar bg-dark fixed-top mb-2" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Cargos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Cargos</h2>
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
    <a id="table" class="btn btn-success" href="{{ route( 'cargo.create' ) }}">
      Criar Cargo
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-1">ID</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cargos as $cargo)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('cargo.edit', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('cargo.show', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-outline-danger" href="{{ route('cargo.destroy', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $cargo->id_cargo}}
                </td>
                <td>
                    {{ $cargo->cargo }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@section('scripts')

@endsection
