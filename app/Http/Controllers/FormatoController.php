<?php

namespace App\Http\Controllers;

use App\Models\Formato;
use Illuminate\Http\Request;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $formatos = Formato::orderBy('formato');
        return view('formato.index')
            ->with(compact('formatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formato = Formato::class;
        return view('formato.create', compact('formato'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formato = Formato::create($request->all());
        return redirect()
            ->route('formato.index')
            ->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $formato = Formato::find($id);
        return view('formato.show')
            ->with(compact('formato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $formato = Formato::find($id);
        return view('formato.form')
            ->with(compact('formato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $formato = Formato::find($id);
        $formato->update($request->all());
        return redirect()
            ->route('formatos.index')
            ->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Formato::find($id)->delete();
        return redirect()
            ->back()
            ->with('destroy','Excluído com sucesso!');
    }
}
