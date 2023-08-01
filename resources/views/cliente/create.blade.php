@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 60px;
  }
</style>
<nav class="navbar bg-danger fixed-top" data-bs-theme="success">
  <div class="container-fluid">
    <a class="navbar-brand">Criar Cliente</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Criar Clientes</h2>
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
<form id="table" action="{{ route('cliente.store')}}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="cliente">Novo Cliente</label>
    <input class="form-control" type="text" name="nome" id="nome"><br>
    <label class="form-label" for="cliente">Celular</label>
    <input class="form-control" type="tel" name="celular" id="celular"><br>
    <label class="form-label" for="cliente">E-mail</label>
    <input class="form-control" type="email" name="email" id="email"><br>
    <label class="form-label" for="cliente">Observações</label>
    <input class="form-control" type="text" name="observacoes" id="observacoes"><br>
       <input class="btn btn-outline-success" type="submit" value="Criar">

</form>

@endsection
@section('scripts')

@endsection
