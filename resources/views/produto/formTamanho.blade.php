@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>
<nav class="navbar bg-danger fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Editar tamanho: {{ $produto->nome }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Editar Tamanhos</h2>
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
<form id="table" action="
{{
        ($produtoTamanho)?
        route('produto.updateTamanho'):
        route('produto.storeTamanho',['id_produto'=>$produto->id_produto])
}}"

    method="post"
    enctype="multipart/form-data" >
    @csrf

    <div class="row">
        <div class="col-md-3">
            <label class="form-label" for="id_tamanho">
                Tamanho*
            </label>

            <select
                class="form-select" name="id_tamanho" id="id_tamanho" required>
                <option value="">Selecione</option>
                @foreach ($tamanhos::orderBy('tamanho')->get() as $item)
                    <option value="{{$item->id_tamanho}}"
                        @selected(
                            ($produtoTamanho && $produtoTamanho->id_tamanho == $item->id_tamanho)?
                            true
                            :
                            false
                        )
                    >
                        {{$item->tamanho}}
                    </option>
                @endforeach

            </select>

        </div>


        <div class="col-md-3">
            <label class="form-label" for="preco">Preço</label>
            <input class="form-control" type="number" name="preco" id="preco" step="0.01" min="0" value="{{
                ($produtoTamanho)?
                $produtoTamanho->preco:
                old('preco')
            }}" required>
        </div>

        <div class="col-12">
            <label class="form-label" for="observacoes">
                Observações
            </label>
            <textarea class="form-control" name="observacoes" id="observacoes">
                {{($produtoTamanho)?$produtoTamanho->observacoes:old('observacoes')}}
            </textarea>
        </div>
    </div>

    @if ($produtoTamanho)
        <input class="btn btn-success mt-3" type="submit" value="Atualizar tamanho do produto">
    @else
        <input class="btn btn-success mt-3" type="submit" value="Atualizar tamanho do produto">
    @endif

</form>

@endsection
@section('scripts')

@endsection
