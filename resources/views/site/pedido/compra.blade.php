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
                <div class="alert alert-primary" role="alert">
                  Pedido realizado com sucesso.
                </div>
                <div class="col-md-12 p-3 d-md-flex justify-content-md-end">
                    <a href="{{url('/produtos')}}" class="btn btn-primary" type="button">Voltar</a>
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
