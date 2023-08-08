@extends('layouts.base')
@section('content')
<style>
  #table {
    margin-top: 62px;
  }
</style>

<a id="table" class="btn btn-outline-success" href="{{ route( 'usuario.create' ) }}">
      Criar Usuário
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-2">ID</th>
                <th class="col-2">Nome</th>
                <th class="col-2">Email</th>
                {{-- <th class="col-2">Senha</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($users->get() as $user)
            <tr>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('usuario.edit', ['id'=>$user->id_user]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('usuario.show', ['id'=>$user->id_user]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-outline-danger" href="{{ route('usuario.destroy', ['id'=>$user->id_user]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $user->id_user}}
                </td>
                <td>
                    {{ $user->nome }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                {{-- <td>
                    {{ $user->password }}
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('usuario.menuUsuario')
@endsection
@section('scripts')

@endsection
