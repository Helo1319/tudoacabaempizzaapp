@extends('layouts.base')
@section('content')
<style>
    #table{
        margin-top: 62px;
    }
</style>

<h2 id="table"></h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuario->user()->get() as $users)
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
                {{ $usuarios->nome}}
            </td>
        </tr>
        @empty

        @endforelse
    </tbody>
</table>
    @include('usuario.menuUsuario')
@endsection
@section('scripts')

@endsection
