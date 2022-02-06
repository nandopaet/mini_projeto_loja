@extends('site.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
    <!-- Início Sessao -->

    <main class="container">
        <div class="row">
            <h3 class="ultimos_cadastros"> Finalizar pedido</h3>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Produto</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row id_item">{{$produto_info->id}}</th>
                        <td>{{$produto_info->nome}}</td>
                        <td>R${{$produto_info->valor}}</td>
                        <td width="8">{{$quantidade}}</td>
                    </tbody>
                </table>
                <div class="col-md-12 p-3 d-md-flex justify-content-md-end">
                    <a href="{{url('/produtos')}}" class="btn btn-white" type="button">Voltar</a>
                    <a href="{{url('/comprar/finalizar_compra/'.$produto_info->id)}}" class="btn btn-primary" type="button">Finalizar Compra</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
@section('css')
    <link href="{{ asset('site/assets/css/ver_produto.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('site/assets/js/carrinho.js') }}" defer></script>
@endsection
