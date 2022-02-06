@extends('site.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
    <!-- Início Sessao -->

    <main class="container">
        <div class="row">
            <h3 class="ultimos_cadastros"> Carrinho de produtos</h3>
            @if (isset($itens_carrinho->carrinho_produto) && count($itens_carrinho->carrinho_produto))
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome Produto</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col"> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($itens_carrinho->carrinho_produto as $item)
                            <tr>
                                <th scope="row id_item">{{$item->produto->id}}</th>
                                <td>{{$item->produto->nome}}</td>
                                <td>R${{$item->produto->valor}}</td>
                                <td width="8">{{$item->quantidade}}</td>
                                <td width="8%">
                                    <a href="{{url('/comprar/produto_car/'.$item->produto_id)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-shopping-basket"></i> </a>
                                    <button type="button" class="btn btn-outline-danger btn-sm remover_item"><i class="far fa-trash-alt"></i></button>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-light infoText_prod col-md-12"  role="alert">
                    <h5>Nenhum produto no carrinho.</h5>
                </div>
            @endif
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
