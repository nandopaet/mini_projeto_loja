@extends('site.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
    <!-- Início Sessao -->

    <main class="container">
        <div class="row">
            <div class="col-md-12">
                    <h3 class="ultimos_cadastros"> Últimos produtos adicionados</h3>
                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                        @if(isset($ultimos_adicionados[0]))
                        @foreach($ultimos_adicionados as $produto)
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">{{$produto->nome}}</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">R${{$produto->valor}}<small class="text-muted fw-light"></small></h1>
                                    <a href="ver_produto/{{$produto->id}}" class="w-100 btn btn-lg btn-outline-primary">Ver Produto</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <div class="alert alert-light infoText_prod col-md-12"  role="alert">
                                <h5>Nenhum produto cadastrado.</h5>
                            </div>
                        @endif
                    </div>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
