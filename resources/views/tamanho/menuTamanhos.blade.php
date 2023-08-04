<nav class="navbar bg-danger fixed-top" data-bs-theme="success">
  <div class="container-fluid">
    <a class="navbar-brand"> Tamanho: </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel"></h2>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('produto.index') }}">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cargos.index') }}">Cargos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('usuario.index') }}">Usuários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cliente.index') }}">Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tamanho.index') }}">Tamanho</a>
          </li>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('formato.index') }}">Formato</a>
          </li>
        </ul>
        </form>
      </div>
    </div>
  </div>
</nav>
