<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;
use App\Fornecedor;
use App\Categoria;

class ProdutosController extends Controller
{
    
    public function index()
    {
        $produtos = Produto::paginate(10);
        return view('admin.produtos.index', compact('produtos'));
    }

    
    public function create()
    {
        $fornecedores   = Fornecedor::all();
        $categorias     = Categoria::all();

        return view('admin.produtos.criar', compact('categorias', 'fornecedores'));
    }

    public function store(Request $req)
    {
        $data = $req->all();
        $prod = Produto::create($data);

        toastr()->success('Produto cadastrado!', 'Sucesso');
        return redirect()->route('admin.produtos.index');
    }

    public function edit($id)
    {
        $produto        = Produto::find($id);
        $fornecedores   = Fornecedor::all();
        $categorias     = Categoria::all();

        return view('admin.produtos.editar', compact('produto', 'categorias', 'fornecedores'));
    }

    public function update(Request $req, $id)
    {
        $data = $req->all();
        
        $produto = Produto::find($id);
        $produto->update($data);
        toastr()->success('Produto alterado!', 'Sucesso');
        return redirect()->route('admin.produtos.index');
    }

    public function destroy($id)
    {
        $prod = Produto::find($id);
        $prod->delete();
        
        toastr()->warning('Produto excluido!', 'Sucesso');
        return redirect()->route('admin.produtos.index');
    }
}
