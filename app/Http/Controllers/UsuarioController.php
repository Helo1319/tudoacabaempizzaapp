<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('nome');
        return view('usuario.index')
            ->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = null;
        return view('usuario.create')
            ->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return to_route('usuario.index')->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user =  User::find($id);
        return view('usuario.show')
            ->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( int $id)
    {

        $user = User::where('id_user','=',$id)->first();

        return view('usuario.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $user = User::find($id);
        // $user->update($request->all());
        $user->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route(
                'usuario.show',
                ['id' => $user->id_user]
            )
            ->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        User::where('id_user','=',$id)->delete();
        return redirect()
            ->back()
            ->with('destroy','Excluído com sucesso!');
    }
}
