<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;

class pedidosController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('admin.pedidos.index', ['pedidos' => $pedidos]);
    }

    public function ver($id)
    {
        $pedidos = Pedido::find($id)->first();
        return view('admin.pedidos.ver', ['pedido' => $pedidos]);
    }

    public function deletar($id)
    {
        $produto = Pedido::find($id)->first();
        $produto->forceDelete();
        return redirect('/painel/pedidos');
    }
}
