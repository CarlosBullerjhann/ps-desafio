<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;

class ProdutoController extends Controller
{
    private $produto;
    private $categoria;

    public function __construct(Produto $produto, Categoria $categoria)
    {
        $this->produto = $produto;
        $this->categoria = $categoria;
    }

    public function index()
    {
        $produtos = $this->produto->all();

        return view('produto.index', compact('produtos'));
    }


    public function create()
    {
        $categorias = $this->categoria->all();

        return view('produto.crud', compact('categorias'));
    }


    public function store(StoreProdutoRequest $request)
    {
        $data = $request->validated();

        $data['imagem'] = '/storage/' . $request->file('imagem')->store('produto', 'public');

        $this->produto->create($data);

        return redirect()->route('produto.index')->with('success', 'produto criado com sucesso');
    }


    public function show($id)
    {
        $produto = $this->produto->find($id);
        $produto->load('categoria');
        return response()->json($produto);
    }


    public function edit($id)
    {
        $produto = $this->produto->find($id);
        $categorias = $this->categoria->all();
        return view('produto.crud', compact('produto', 'categorias'));
    }


    public function update(UpdateProdutoRequest $request, $id)
    {
        $data = $request->validated();
        $produto = $this->produto->find($id);

        if ($request->hasFile('imagem')) {
            Storage::disk('public')->delete(substr($produto->imagem, 9));
            $data['imagem'] = '/storage/' . $request->file('imagem')->store('produto', 'public');
        }

        $produto->update($data);
        return redirect()->route('produto.index')->with('success', 'produto editado com sucesso');
    }

    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        Storage::disk('public')->delete(substr($produto->imagem, 9));
        $produto->delete();
        return redirect()->route('produto.index')->with('success', 'produto deletado com sucesso');
    }
}
