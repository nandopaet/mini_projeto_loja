@extends('admin.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
    <!-- Início Sessao -->

    <main class="container">
        <div class="row">
            <h3 class="ultimos_cadastros">Lista de pedidos</h3>
            @if (isset($pedidos) && count($pedidos))
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Itens</th>
                            <th scope="col">Total</th>
                            <th scope="col"> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pedidos as $pedido)
                            <tr>
                                <th scope="row id_item">{{$pedido->id}}</th>
                                <td>{{$pedido->cliente->nome}}</td>
                                <td>{{count($pedido->produtos_pedidos)}}</td>
                                <td>{{$pedido->total}}</td>
                                <td width="8%">
                                    <a href="/painel/pedidos/view/{{$pedido->id}}" class="btn btn-outline-white btn-sm"><i class="far fa-eye"></i></a>
                                    <a href="/painel/pedidos/deletar/{{$pedido->id}}" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-light infoText_prod col-md-12"  role="alert">
                    <h5>Nenhum pedido cadastrado.</h5>
                </div>
            @endif
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
@section('css')
    <link href="{{ asset('site/assets/css/ver_pedido.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('site/assets/js/carrinho.js') }}" defer></script>
@endsection
