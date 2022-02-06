@extends('site.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
    <!-- Início Sessao -->

    @section('meta')
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="ultimos_cadastros"><strong class="id_prod">{{$produto->id}}</strong> - {{$produto->nome}}</h3>
            </div>
            <div class="col-md-7">
                <img src="{{asset('site/assets/images/sem-foto.jpg')}}" class="img-fluid" alt="sem img">
            </div>
            <div class="col-md-5">
                <h5 class="infoDesc">Descrição</h5>
                <p class="descricao_text">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content. </p>
                <div class="row">
                    <div class="col-9">
                        <h4>valor: <strong class="valor_prod">R${{$produto->valor}}</strong></h4>
                    </div>
                    <div class="col-3">
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="number" name="quantidade" class="form-control" id="floatingInputGrid" min="1" value="1">
                                    <label for="floatingInputGrid">Quantidade</label>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="buttons_gear">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/comprar/produto/{{$produto->id}}" class="btn btn-lg btn-warning btn_comprar">Comprar</a>
                        <button type="button" class="btn btn-lg btn-Light add_carrinho">Adicionar ao carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->


   <!-- TOAST -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11" data-bs-autohide="true">
        <div id="toastRetorno" class="toast" role="alert" aria-live="assertive" aria-atomic="true" >
            <div class="toast-header">
                <strong class="me-auto">Informação carrinho</strong>
                <small></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
               Produto adicionando ao carrinho.
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="{{ asset('site/assets/css/ver_produto.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('site/assets/js/addToCart.js') }}" defer></script>
@endsection
