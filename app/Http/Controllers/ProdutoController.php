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

    /*
    *|--------------------------------------------
    *| Tamanhos de Produtos
    *|--------------------------------------------
    */

    public function createTamanho(int $id_produto)
    {
        $prod_tam = null;
        $produtos = Produto::find($id_produto);
        $tamanhos = Tamanho::class;

        return view('produto.formTamanho')
            ->with(compact(
                'produtos',
                'tamanhos',
                'prod_tam'
            ));
    }

    public function storeTamanho(Request $request, int $id_produto)
    {
        $prod_tam = ProdutoTamanho::create([
            'id_produto' => $id_produto,
            'id_tamanho' => $request->id_tamanho,
            'preco'      => $request->preco,
            'observacoes' => $request->observacoes
        ]);

        return redirect()
            ->route('produto.show', ['id' => $id_produto])
            ->with('success', 'Tamanho cadastrado com sucesso.');
    }

    public function editTamanho(int $id)
    {
        $prod_tam = ProdutoTamanho::find($id);
        // $produto  = Produto::find($produtoTamanho->id_produto);
        $produtos  = $prod_tam->produto();
        $tamanhos = ProdutoTamanho::class;

        return view('produto.formTamanho')
            ->with(compact(
                'produtos',
                'tamanhos',
                'prod_tam'
            ));
    }

    public function updateTamanho(Request $request, int $id)
    {
        $prod_tam = ProdutoTamanho::find($id);
        $prod_tam->update($request->all());

        return redirect()
            ->route(
                'produto.show',
                ['id' => $prod_tam->id_produto]
            )
            ->with('success', 'Atualizado com sucesso');
    }

    public function destroyTamanho(int $id)
    {
        ProdutoTamanho::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger', 'Removido com sucesso!');
    }
}
