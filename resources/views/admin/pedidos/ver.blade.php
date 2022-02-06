@extends('admin.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
    <!-- Início Sessao -->

    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="info_desc">Informações produto</h5>
            </div>
            <div class="col-md-12 box_border">
                Cliente: <strong>{{$pedido->cliente->nome}}</strong>
            </div>
            <div class="col-md-12 box_border">
                Itens:
                @foreach($pedido->produtos_pedidos as $iten)
                <p>{{$iten->produto->nome." - ".$iten->quantidade." . R$".$iten->produto->valor}}</p>
                @endforeach
            </div>
            <div class="col-md-12 box_border">
                Total da compra: R$<strong>{{$pedido->total}}</strong>
            </div>

            <div class="col-md-12 p-3 d-md-flex justify-content-md-end">
                <a href="{{url('/painel/pedidos')}}" class="btn btn-primary" type="button">Voltar</a>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
