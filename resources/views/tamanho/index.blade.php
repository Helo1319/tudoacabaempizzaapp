@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>


    <a id="table" class="btn btn-outline-success" href="{{ route( 'tamanho.create' ) }}">
      Criar Tamanho
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-22">Ações</th>
                <th class="col-2">ID</th>
                <th class="col-4">Tamanho</th>
                <th class="col-4">Preço</th>

            </tr>
        </thead>
        <tbody>
            @foreach($tamanhos as $tamanho)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('tamanho.edit', ['id'=>$tamanho->id_tamanho]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    {{-- <a class="btn btn-outline-success" href="{{ route('tamanho.show', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a> --}}
                    <a class="btn btn-outline-danger" href="{{ route('tamanho.destroy', ['id'=>$tamanho->id_tamanho]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $tamanho->id_tamanho}}
                </td>
                <td>
                    {{ $tamanho->tamanho }}
                </td>
                <td>
                    {{ $tamanho->preco}}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    @include('tamanho.menuTamanhos')
@endsection
@section('scripts')

@endsection
