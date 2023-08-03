@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>

<h2 id="table"> Tipo: {{ $produtos->tipo->tipo }} </h2>
<p> Descrição: {!! nl2br($produtos->descricao) !!}</p>
@if ($produtos->observacoes)
    <p class="alert alert-info">
        {!! nl2br($produtos->observacoes) !!}
    </p>
@endif
{{-- <button onclick="history.back()">Go Back</button> --}}
 <a   href="{{ route('produto.index') }}" type="button" class="btn btn-outline-success" value="">Voltar</a>
    {{-- <h6>
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
                {{-- <a class="btn btn-outline-primary" href="{{ route('produto.edit', ['id'=>$produtos->id_produto]) }}">
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
--}}
@endsection
    @include('produto.menuProduto')
@section('scripts')

@endsection
