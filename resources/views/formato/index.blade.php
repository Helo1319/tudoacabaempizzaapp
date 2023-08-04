@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>


    <a id="table" class="btn btn-outline-success" href="{{ route( 'formato.create' ) }}">
      Criar Formato
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-1">ID</th>
                <th class="col-3">Formato</th>
                <th class="col-2">Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formatos->get() as $formato)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('formato.edit', ['id'=>$formato->id_formato]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    {{-- <a class="btn btn-outline-success" href="{{ route('formato.show', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a> --}}
                    <a class="btn btn-outline-danger" href="{{ route('formato.destroy', ['id'=>$formato->id_formato]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $formato->id_formato}}
                </td>
                <td>
                    {{ $formato->formato }}
                </td>
                <td>
                    {{ $formato->preco }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('formato.menuFormato')
@endsection
@section('scripts')

@endsection
