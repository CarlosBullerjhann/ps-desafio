<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Produto;


class SiteController extends Controller
{
    public function index()
    {
        $produto = Produto::all();
        $categoria = Categoria::all();
        return view('site.index', compact('produto', 'categoria'));
    }
}
