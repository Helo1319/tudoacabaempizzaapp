@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>
<nav class="navbar bg-dark fixed-top mb-2" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Usuários</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Usuários</h2>
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
            <a class="nav-link" href="/usuario">Usuarios</a>
          </li> 
            </ul>
          </li>
        </ul>
        </form>
      </div>
    </div>
  </div>
</nav>
<a id="table" class="btn btn-success" href="{{ route( 'usuario.create' ) }}">
      Criar Usuário
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-2">ID</th>
                <th class="col-2">Nome</th>
                <th class="col-2">Email</th>
                <th class="col-2">Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $users)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('usuario.edit', ['id'=>$users->id_user]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('usuario.show', ['id'=>$users->id_user]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-outline-danger" href="{{ route('usuario.destroy', ['id'=>$users->id_user]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $users->id_user}}
                </td>
                <td>
                    {{ $users->nome }}
                </td>
                <td>
                    {{ $users->email }}
                </td>
                <td>
                    {{ $users->$id_cargo }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@section('scripts')

@endsection
