<?php

/**
 * |----------------------------------------
 * | @author Alessandra Carvalho;
 *           Ana Laura Clementino;
 *           Heloísa Ribeiro;
 *           Luiza Neia.
 * |----------------------------------------
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Cliente,
    User
};
use Ramsey\Uuid\Type\Integer;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clientes = Cliente::orderBy('nome');
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = null;
        return view('cliente.create')
            ->with(compact('Cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return redirect()
            ->route('cliente.index')
            ->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show')
            ->with(compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.form')
            ->with(compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        return redirect()
            ->route('cliente.index')
            ->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Cliente::find($id)->delete();
        return redirect()
            ->back()
            ->with('destroy','Excluído com sucesso!');
    }
}
