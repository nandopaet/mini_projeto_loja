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
                <h5 class="info_desc">Informações pessoais</h5>
            </div>
            <div class="col-md-6 box_border">
                Nome: <strong>{{$cliente->nome}}</strong>
            </div>
            <div class="col-md-6 box_border">
                CPF: <strong>{{$cliente->cpf}}</strong>
            </div>
            <div class="col-md-12 box_border">
                E-mail: <strong>{{$cliente->email}}</strong>
            </div>
            <div class="col-md-12">
                <h5 class="info_desc">Informações localização</h5>
            </div>
            <div class="col-md-4 box_border">
                CEP: <strong>{{$cliente->cep}}</strong>
            </div>
            <div class="col-md-4 box_border">
                Estado: <strong>{{$cliente->estado}}</strong>
            </div>
            <div class="col-md-4 box_border">
                Cidade: <strong>{{$cliente->cidade}}</strong>
            </div>
            <div class="col-md-6 box_border">
                Bairro: <strong>{{$cliente->bairro}}</strong>
            </div>
            <div class="col-md-4 box_border">
                Logradouro: <strong>{{$cliente->logradouro}}</strong>
            </div>
            <div class="col-md-2 box_border">
                Número: <strong>{{$cliente->numero}}</strong>
            </div>
            <div class="col-md-12 box_border">
                Complemento: <strong>{{$cliente->complemento}}</strong>
            </div>
            <div class="col-md-12">
                <h5 class="info_desc">Informações compras</h5>
            </div>
            <div class="col-md-12 box_border">
                Quantidade de compras no site: <strong>{{count($cliente->pedidos)}}</strong>
            </div>
            <div class="col-md-12 p-3 d-md-flex justify-content-md-end">
                    <a href="{{url('/painel/clientes')}}" class="btn btn-primary" type="button">Voltar</a>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
