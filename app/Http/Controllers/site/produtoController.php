<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\CarrinhoProduto;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\ProdutosPedido;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;
use phpDocumentor\Reflection\Utils;

class produtoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('id', 'DESC')->get();
        return view('site.produtos.index', ['ultimos_adicionados' => $produtos]);
    }

    public function verProduto($id)
    {
        if (is_numeric($id)) {
            $produto = Produto::find($id);
            return view('site.produtos.verProduto', ['produto' => $produto]);
        }
    }

    public function comprarProduto($id, Request $request)
    {
        $produto = Produto::find($id);
        $temp_prod = $request->session()->get('info_prod_temp');
        $userSession = $request->session()->get('cliente_info');

        if (isset($userSession) && !is_null($userSession)) {

            return view('site.pedido.index', ['produto_info' => $produto, 'quantidade' => $temp_prod['quantidade']]);
        }
        return view('site.cliente.index');
    }

    public function comprarProdutoCar($id, Request $request)
    {
        $produto_car = CarrinhoProduto::find(5);
        $request->session()->put('info_prod_temp', ['produto_id' => $produto_car->produto_id, "quantidade" => $produto_car->quantidade]);
        return redirect('/comprar/produto/' . $produto_car->produto_id);
    }

    public function finalizarCompra($id, Request $request)
    {
        $temp_prod = $request->session()->get('info_prod_temp');
        $userSession = $request->session()->get('cliente_info');
        if ($id == $temp_prod['produto_id']) {
            $pedido = new Pedido();
            $pedido->cliente_id = $userSession;
            $pedido->data_venda = date('Y-m-d', mktime());
            $pedido->save();
            $this->itensPedido($pedido->id, $temp_prod['produto_id'], $temp_prod['quantidade']);
            $request->session()->put('info_prod_temp', ['produto_id' => -1, "quantidade" => -1]);
            return view('site.pedido.compra');

        }

    }

    public function tempCompra(Request $request)
    {
        $request->session()->put('info_prod_temp', ['produto_id' => $request->produto, "quantidade" => $request->quantidade]);
        return json_encode(['status' => true]);
    }

    protected function itensPedido($pedido_id, $produto_id, $quantiddade)
    {
        $produto_pedido = new ProdutosPedido();
        $produto_pedido->pedido_id = $pedido_id;
        $produto_pedido->produto_id = $produto_id;
        $produto_pedido->quantidade = $quantiddade;
        $produto_pedido->save();
        $this->setTotalCompra($pedido_id, $produto_id, $quantiddade);
        return true;
    }

    protected function setTotalCompra($pedido_id, $produto_id, $quantidade)
    {
        $pedido = Pedido::find($pedido_id);
        $produto = Produto::find($produto_id);
        $pedido->total = $pedido->total + ($produto->valor * $quantidade);
        $pedido->save();
        return true;
    }


}
