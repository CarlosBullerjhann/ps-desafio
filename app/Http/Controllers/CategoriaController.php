<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreCategoriaRequest;

use App\Models\Categoria;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{

    private $categoria;

    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    public function index()
    {
        $categorias = $this->categoria->all();
        return view('categoria.index', compact('categorias'));
    }


    public function create()
    {
        return view('categoria.crud');
    }


    public function store(StoreCategoriaRequest $request)
    {
        $data = $request->validated();
        $this->categoria->create($data);

        return redirect()->route('categoria.index')->with('success', 'Categoria criada com sucesso.');
    }

    public function show($id)
    {
        $categoria = $this->categoria->find($id);
        return response()->json($categoria);
    }

    public function edit($id)
    {
        $categoria = $this->categoria->find($id);
        return view('categoria.crud', compact('categoria'));
    }

    public function update(UpdateCategoriaRequest $request, $id)
    {
        $data = $request->validated();
        $categoria = $this->categoria->find($id);
        $categoria->update($data);

        return redirect()->route('categoria.index')->with('success', 'Categoria modificada com sucesso.');
    }

    public function destroy($id)
    {
        $categoria = $this->categoria->find($id);
        $categoria->delete();

        return redirect()->route('categoria.index')->with('success', 'Categoria deletada com sucesso.');
    }
}
