@extends('admin.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
    <!-- Início Sessao -->

    <main class="container">
        <div class="row">
            <h3 class="ultimos_cadastros">Produtos</h3>
            <div class="col-md-12 p-3 d-md-flex justify-content-md-end">
                <a href="{{url('/painel/produtos/adicionar')}}" class="btn btn-primary" type="button">Adicionar Produto</a>
            </div>
            @if (isset($produtos) && count($produtos))
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            <th scope="col"> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <th scope="row id_item">{{$produto->id}}</th>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->valor}}</td>
                                <td width="10%">
                                    <a href="/painel/produtos/view/{{$produto->id}}" class="btn btn-outline-white btn-sm"><i class="far fa-eye"></i></a>
                                    <a href="/painel/produtos/editar/{{$produto->id}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                                    <a href="/painel/produtos/deletar/{{$produto->id}}" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-light infoText_prod col-md-12"  role="alert">
                    <h5>Nenhum produto cadastrado.</h5>
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
