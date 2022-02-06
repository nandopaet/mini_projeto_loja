<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Carrinho;
use App\Models\CarrinhoProduto;
use Illuminate\Http\Request;

class carrinhoController extends Controller
{
    public function index()
    {
        $carrinho = Carrinho::where('ip', '=', $_SERVER['REMOTE_ADDR'])->first();
        return view('site.carrinho.index', ['itens_carrinho' => $carrinho]);
    }

    public function addAoCarrinho(Request $request)
    {
        $carrinho = Carrinho::where('ip', $_SERVER['REMOTE_ADDR'])->first();

        if ($carrinho == null) {
            $carrinho = new Carrinho();
            $carrinho->ip = $_SERVER['REMOTE_ADDR'];
            $carrinho->save();
        }
        if ($request->quantidade > 0) {
            $this->addItensCarrinho($carrinho->id, $request);
            return json_encode(['status' => true]);
        }
        return json_encode(['status' => false]);
    }

    public function remCarrinho($id)
    {
        $carrinho = CarrinhoProduto::where('produto_id', $id)->first();
        if ($carrinho != null) {
            $carrinho->forceDelete();
            return json_encode(['status' => true]);
        }
        return json_encode(['status' => false]);
    }

    protected function addItensCarrinho($id_carrinho, Request $request)
    {

        $carrinho_produto = CarrinhoProduto::updateOrInsert(
            ['carrinho_id' => $id_carrinho, 'produto_id' => $request->produto],
            ['quantidade' => $request->quantidade]
        );


    }
}
