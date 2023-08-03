@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;

  }
</style>


    <a id="table" class="btn btn-outline-success" href="{{ route( 'produto.create' ) }}">
      Cadastrar Produto
    </a>

    <table class="table table-striped table-hover col-12">
        <thead>
            <tr>
                <th class="col-1">Ações</th>
                {{-- <th class="col-1"></th> --}}
                <th class="col-1">ID</th>
                <th class="col-2"> Imagem</th>
                <th class="col-1">Produto</th>
                <th class="col-1">Observações</th>
                <th class="col-1">Descricao</th>
                <th class="col-2">Tipo produto</th>

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
                    {{ $produto->id_produto}}
                </td>

                 <td>
                    <img src="#" alt="">
                </td>
                <td>
                    {{ $produto->nome }}
                </td>


                <td>{{ ($produto->observacoes) }}</td>
                <td>{{ ($produto->descricao) }}</td>
                <td>

                    {{$produto->tipo->tipo}}

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>



@endsection
    @include('produto.menuProduto')
@section('scripts')

@endsection
