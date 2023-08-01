<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        $users = User::create($request->all());
        return redirect()
            ->route(
                'usuario.store',
                ['id' => $users->id_user]
            )
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $users = User::find($id);
        return view('usuario.show')
            ->with(compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, int $id)
    {
        return view('usuario.edit', [
            'users' => $request->users(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->users()->fill($request->validated());

        if ($request->users()->isDirty('email')) {
            $request->users()->email_verified_at = null;
        }

        $request->users()->save();

        return Redirect::route('usuario.edit')->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        User::find($id)->delete();
        return redirect()
            ->back()
            ->with('destroy','Excluído com sucesso!');
    }
}
