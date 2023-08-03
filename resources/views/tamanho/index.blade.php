@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>


    <a id="table" class="btn btn-outline-success" href="{{ route( 'cargos.create' ) }}">
      Criar Tamanho
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-1">ID</th>
                <th>Tamanho</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tamanhos as $tamanho)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('tamanhos.edit', ['id'=>$tamanho->id_tamanho]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    {{-- <a class="btn btn-outline-success" href="{{ route('cargos.show', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a> --}}
                    <a class="btn btn-outline-danger" href="{{ route('cargos.destroy', ['id'=>$tamanho->id_tamanho]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $tamanho->id_tamanho}}
                </td>
                <td>
                    {{ $tamanho->tamanho }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('tamanho.menuTamanho')
@endsection
@section('scripts')

@endsection
