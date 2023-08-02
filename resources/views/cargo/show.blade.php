@extends('layouts.base')
@section('content')
<style>
    #table{
        margin-top: 62px;
    }
</style>
@include('cargo.menuCargos')
<h2 id="table"> Relação de Usuários com cargo</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cargo->user()-> $users)
         <tr>
            <td>
                <a class="btn btn-outline-primary" href="#">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a class="btn btn-outline-success" href="#">
                    <i class="fa-solid fa-eye"></i>
                </a>
            </td>
            <td>
                {{ $usuario->nome}}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">
                Nenhum usuário com esse cargo
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
@section('scripts')

@endsection
