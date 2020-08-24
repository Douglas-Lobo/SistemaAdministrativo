<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;
use App\Fornecedor;
use App\Cliente;
use App\Pedido;

class HomeAdminController extends Controller
{
    public function index(){
        
        $produtos       = Produto::all();
        $clientes       = Cliente::all();
        $fornecedores   = Fornecedor::all();
        $pedidos        = Pedido::all();

        return view('admin.index', compact('produtos', 'fornecedores', 'clientes', 'pedidos'));

    }
}
