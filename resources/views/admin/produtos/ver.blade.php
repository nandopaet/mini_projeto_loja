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
            <div class="col-md-6 box_border">
                <img src="{{asset('/site/assets/images/sem-foto.jpg')}}" class="img-fluid" alt="sem img">
            </div>
            <div class="col-md-6 box_border">
                <p>Nome: <strong>{{$produto->nome}}</strong></p>
                <p>Valor: <strong>{{$produto->valor}}</strong></p>
                <p class="descricao_text">Descrição <br/>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content. </p>
            </div>


            <div class="col-md-12 p-3 d-md-flex justify-content-md-end">
                <a href="{{url('/painel/produtos')}}" class="btn btn-primary" type="button">Voltar</a>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
