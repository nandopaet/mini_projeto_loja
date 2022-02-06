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
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="info_desc">Alterar informações do produto</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="row g-3" METHOD="POST" action="/painel/produtos/editar/{{$produto->id}}">
                            <div class="col-md-6">
                                <label for="inputNome" class="form-label">Nome produto</label>
                                <input type="text" class="form-control" name="nome" id="inputNome" value="{{$produto->nome}}" required>
                            </div>
                            <div class="col-md-5">
                                <label for="inputValor" class="form-label">Valor</label>
                                <input type="text" class="form-control" min="14" max="14" name="valor" id="inputValor"  value="{{$produto->valor}}"required>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                <a href="{{url('/painel/produtos')}}" class="btn btn-white" type="button">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
