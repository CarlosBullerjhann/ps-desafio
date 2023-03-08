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
}
