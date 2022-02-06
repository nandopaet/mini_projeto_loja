<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('')->group(function (){
    Route::get('/', [\App\Http\Controllers\site\homeController::class, 'index']);
    //Rotas Home
    Route::get('produtos', [\App\Http\Controllers\site\produtoController::class, 'index']);
    //Rptas carrinho
    Route::get('carrinho', [\App\Http\Controllers\site\carrinhoController::class, 'index']);
    Route::post('carrinho/adicionar', [\App\Http\Controllers\site\carrinhoController::class, 'addAoCarrinho']);
    Route::get('carrinho/deletar_item/{id}', [\App\Http\Controllers\site\carrinhoController::class, 'remCarrinho']);
    //Rotas produto
    Route::get('ver_produto/{id}', [\App\Http\Controllers\site\produtoController::class, 'verProduto']);
    Route::get('comprar/produto/{id}', [\App\Http\Controllers\site\produtoController::class, 'comprarProduto']);
    Route::get('comprar/finalizar_compra/{id}', [\App\Http\Controllers\site\produtoController::class, 'finalizarCompra']);
    Route::post('comprar/temp_compra', [\App\Http\Controllers\site\produtoController::class, 'tempCompra']);
    Route::get('comprar/produto_car/{id}', [\App\Http\Controllers\site\produtoController::class, 'comprarProdutoCar']);

    //Rota compra
    Route::get('cliente', [\App\Http\Controllers\site\clienteController::class, 'index']);

    //Rotas Cliente
    Route::get('cliente', [\App\Http\Controllers\site\clienteController::class, 'index'])->name('cliente');
    Route::post('cliente/adicionar', [\App\Http\Controllers\site\clienteController::class, 'adicionar']);
    Route::post('cliente/acessar', [\App\Http\Controllers\site\clienteController::class, 'acessarConta']);
});

Route::prefix('painel')->group(function (){
    Route::get('', [\App\Http\Controllers\admin\homeController::class, 'index']);
    //Rotas Clientes
    Route::get('clientes', [\App\Http\Controllers\admin\clientesController::class, 'index'])->name('clientes');
    Route::get('clientes/view/{id}', [\App\Http\Controllers\admin\clientesController::class, 'ver']);
    Route::get('clientes/editar/{id}', [\App\Http\Controllers\admin\clientesController::class, 'editar']);
    Route::post('clientes/editar/{id}', [\App\Http\Controllers\admin\clientesController::class, 'editar']);
    Route::get('clientes/deletar/{id}', [\App\Http\Controllers\admin\clientesController::class, 'deletar']);
    Route::get('clientes/adicionar', [\App\Http\Controllers\admin\clientesController::class, 'adicionar']);
    Route::post('clientes/adicionar', [\App\Http\Controllers\admin\clientesController::class, 'adicionar']);
    //Rotas Produtos.
    Route::get('produtos', [\App\Http\Controllers\admin\produtosController::class, 'index'])->name('produtos');
    Route::get('produtos/view/{id}', [\App\Http\Controllers\admin\produtosController::class, 'ver']);
    Route::get('produtos/editar/{id}', [\App\Http\Controllers\admin\produtosController::class, 'editar']);
    Route::post('produtos/editar/{id}', [\App\Http\Controllers\admin\produtosController::class, 'editar']);
    Route::get('produtos/deletar/{id}', [\App\Http\Controllers\admin\produtosController::class, 'deletar']);
    Route::get('produtos/adicionar', [\App\Http\Controllers\admin\produtosController::class, 'adicionar']);
    Route::post('produtos/adicionar', [\App\Http\Controllers\admin\produtosController::class, 'adicionar']);
    //Pedidos Controller
    Route::get('pedidos', [\App\Http\Controllers\admin\pedidosController::class, 'index'])->name('pedidos');
    Route::get('pedidos/view/{id}', [\App\Http\Controllers\admin\pedidosController::class, 'ver']);
    Route::get('pedidos/deletar/{id}', [\App\Http\Controllers\admin\pedidosController::class, 'deletar']);

});

