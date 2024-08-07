@extends('layouts.base')
@section('content')
<style>
    #table{
        margin-top: 62px;
    }
</style>

<h2 id="table"> Relação de Usuários com esse cargo</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>

         <tr>
            <td>
                <a class="btn btn-outline-primary" href="#">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a class="btn btn-outline-success" href="#">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
            <td>
                {{$cliente->id_cliente}}
            </td>
        </tr>
    </tbody>
</table>
    @include('cliente.menuCliente')
@endsection
@section('scripts')

@endsection
