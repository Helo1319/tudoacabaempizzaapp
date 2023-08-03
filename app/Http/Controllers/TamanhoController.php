<?php

namespace App\Http\Controllers;

use App\Models\Tamanho;
use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tamanho = Tamanho::orderBy('tamanho')
                        ->get();
        return view('tamanho.index')
            ->with(compact('tamanhos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tamanho = Tamanho::class;
        return view('tamanho.create', compact('tamanho'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tamanho = Tamanho::create($request->all());
        return redirect()
            ->route('tamanhos.index')
            ->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $tamanho = Tamanho::find($id);
        return view('tamanho.show')
            ->with(compact('tamanho'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $tamanho = Tamanho::find($id);
        return view('tamanho.form')
            ->with(compact('tamanho'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $tamanho = Tamanho::find($id);
        $tamanho->update($request->all());
        return redirect()
            ->route('tamanhos.index')
            ->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Tamanho::find($id)->delete();
        return redirect()
            ->back()
            ->with('destroy','Excluído com sucesso!');
    }
}
