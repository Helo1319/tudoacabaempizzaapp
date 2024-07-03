@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>

    <a id="table" class="btn btn-outline-success" href="{{ route( 'cliente.create' ) }}">
      Administrar Cliente
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-1">ID</th>
                <th>Nome</th>
                <th>Celular</th>
                <th>E-mail</th>
                <th>Observação</th>

            </tr>
        </thead>
        <tbody>
            @foreach($clientes->get() as $cliente)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('cliente.edit', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('cliente.show', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-outline-danger" href="{{ route('cliente.destroy', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $cliente->id_cliente}}
                </td>
                <td>
                    {{ $cliente->nome }}
                </td>
                <td>
                    {{ $cliente->celular }}
                </td>
                <td>
                    {{ $cliente->email}}
                </td>
                <td>
                    {{ $cliente->observacoes }}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    @include('cliente.menuCliente')
@endsection
@section('scripts')

@endsection
