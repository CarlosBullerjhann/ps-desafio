<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Produto;


class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias'));
    }

    public function produtoFilter(Request $request)
    {
        $categoriaSelect = Categoria::where('categoria', $request['categorias'])->first();
        $produtos = [];
        if (isset($categoriaSelect))
            $produtos = Produto::where('categoria_id', $categoriaSelect->id)->get();
        else
            $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias', 'categoriaSelect'));
    }

    public function produtoFind(Request $request)
    {
        $produtos = Produto::where('nome', 'LIKE', "%{$request['search']}%")->get();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias'));
    }

    public function compra($id)
    {
        $produto = Produto::find($id);
        return view('site.compra', compact('produto'));
    }

    public function comprar(Request $request, $id)
    {
        $produto = Produto::find($id);
        $quantidade = $request->quantidade;

        if ($produto->quantidade >= $quantidade) {
            $produto->quantidade -= $quantidade;
            $produto->save();
            return redirect()->back()->with('success', 'Produto comprado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'quantidade solocitada superior ao estoque ou não possui mais esse item no estoque.');
        }
    }
}
