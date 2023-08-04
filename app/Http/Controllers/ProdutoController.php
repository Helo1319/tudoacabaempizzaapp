<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use Illuminate\Support\Facades\DB;

use App\Models\{
    Produto,
    ProdutoTamanho,
    Tamanho,
    TipoProduto
};
use Ramsey\Uuid\Type\Integer;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('nome')->paginate(10);
        $tiposProdutos = TipoProduto::class;
        return view('produto.index')
            ->with(compact('produtos', 'tiposProdutos'));
    }


    public function create()
    {
        $produto = null;
        $tiposProduto = TipoProduto::class;
        return view('produto.create')
            ->with(compact(
                'produto',
                'tiposProduto'
            ));
    }


    public function store(Request $request)
    {
        $produtos = Produto::create($request->all());

        if($request->foto){
            $extension = $request->foto->getClientOriginalExtension();
            $nomeFoto = date('YmdHis').rand(0,1000).'.'.$extension;
            $request->foto->storeAs('/public/fotos', $nomeFoto);
            $produtos->foto = $nomeFoto;
            $produtos->save();
        }
        return redirect()
            ->route(
                'produto.show',
                ['id' => $produtos->id_produto]
            )
            ->with('success', 'Cadastrado com sucesso.');
    }

    public function show(int $id)
    {
        $produtos = Produto::find($id);
        return view('produto.show')
            ->with(compact('produtos'));
    }

    public function edit(int $id)
    {

        $produtos = Produto::find($id);
        $tiposProduto = TipoProduto::find($id);
        return view('produto.form', compact('produtos', 'tiposProduto'));

    }

    public function update(Request $request, int $id)
    {
        $produtos = Produto::find($id);
        $produtos->update($request->all());
        return redirect()
            ->route(
                'produto.show',
                ['id' => $produtos->id_produto]
            )
            ->with('success', 'Atualizado com sucesso!');
    }

     public function destroy(int $id) {

        $produtos = Produto::find($id);
        if ($produtos) {
            $produtos->delete();
        return redirect()
                ->back()
                ->with('success', 'Removido com sucesso!');
        } else {
            return redirect()
                ->back()
                ->with('danger', 'Produto não encontrado!');
        }
    }
}
