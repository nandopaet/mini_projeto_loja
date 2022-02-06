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
                        <h5 class="info_desc">Alterar informações do cliente</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="row g-3" METHOD="POST" action="/painel/clientes/editar/{{$cliente->id}}">
                            <div class="col-md-12">
                                <label for="inputNome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" name="nome" id="inputNome" value="{{$cliente->nome}}" required>
                            </div>
                            <div class="col-md-5">
                                <label for="inputCpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" min="14" max="14" name="cpf" id="inputCpf"  value="{{$cliente->cpf}}"required>
                            </div>
                            <div class="col-7">
                                <label for="inputEmail" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="inputEmail" value="{{$cliente->email}}" required>
                            </div>
                            <div class="col-12">
                                <label for="inputCep" class="form-label">CEP</label>
                                <input type="text" class="form-control" name="cep" id="inputCep" value="{{$cliente->cep}}" required>
                            </div>
                            <div class="col-6">
                                <label for="inputCidade" class="form-label">Estado</label>
                                <select class="form-select" name="estado" id="inputEstado" value="{{$cliente->estado}}" required>
                                    <option >Selecione o estado</option>
                                    <option value="AC" {{ $cliente->estado == "AC" ? "selected" : "" }}>Acre</option>
                                    <option value="AL" {{ $cliente->estado == "AL" ? "selected" : "" }}>Alagoas</option>
                                    <option value="AP" {{ $cliente->estado == "AP" ? "selected" : "" }}>Amapá</option>
                                    <option value="AM" {{ $cliente->estado == "AM" ? "selected" : "" }}>Amazonas</option>
                                    <option value="BH" {{ $cliente->estado == "BH" ? "selected" : "" }}>Bahia</option>
                                    <option value="CE" {{ $cliente->estado == "CE" ? "selected" : "" }}>Ceará</option>
                                    <option value="DF" {{ $cliente->estado == "DF" ? "selected" : "" }}>Distrito Federal</option>
                                    <option value="ES" {{ $cliente->estado == "ES" ? "selected" : "" }}>Espírito Santo</option>
                                    <option value="GO" {{ $cliente->estado == "GO" ? "selected" : "" }}>Goiás</option>
                                    <option value="MA" {{ $cliente->estado == "MA" ? "selected" : "" }}>Maranhão</option>
                                    <option value="MT" {{ $cliente->estado == "MT" ? "selected" : "" }}>Mato Grosso</option>
                                    <option value="MS" {{ $cliente->estado == "MS" ? "selected" : "" }}>Mato Grosso do Sul</option>
                                    <option value="MG" {{ $cliente->estado == "MG" ? "selected" : "" }}Minas GeraiS</option>
                                    <option value="PA" {{ $cliente->estado == "PA" ? "selected" : "" }}>Pará</option>
                                    <option value="PB" {{ $cliente->estado == "PB" ? "selected" : "" }}>Paraíba</option>
                                    <option value="PR" {{ $cliente->estado == "PR" ? "selected" : "" }}>Paraná</option>
                                    <option value="PE" {{ $cliente->estado == "PE" ? "selected" : "" }}>Pernambuco</option>
                                    <option value="PI" {{ $cliente->estado == "PI" ? "selected" : "" }}>Piauí</option>
                                    <option value="RJ" {{ $cliente->estado == "RJ" ? "selected" : "" }}>Rio de Janeiro</option>
                                    <option value="RN" {{ $cliente->estado == "RN" ? "selected" : "" }}>Rio Grande do Norte</option>
                                    <option value="RS" {{ $cliente->estado == "RS" ? "selected" : "" }}>Rio Grande do Sul</option>
                                    <option value="RO" {{ $cliente->estado == "RO" ? "selected" : "" }}>Rondônia</option>
                                    <option value="SC" {{ $cliente->estado == "SC" ? "selected" : "" }}>Santa Catarina</option>
                                    <option value="SP" {{ $cliente->estado == "SP" ? "selected" : "" }}>São Paulo </option>
                                    <option value="SE" {{ $cliente->estado == "SE" ? "selected" : "" }}>Sergipe</option>
                                    <option value="TO" {{ $cliente->estado == "TO" ? "selected" : "" }}>Tocantins</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="inputCidade" value="{{$cliente->cidade}}" required>
                            </div>
                            <div class="col-md-10">
                                <label for="inputLogradouro" class="form-label">Logradouro <smal>(* Rua)</smal></label>
                                <input type="text" class="form-control" name="logradouro" id="inputLogradouro" value="{{$cliente->logradouro}}" required>
                            </div>
                            <div class="col-md-2">
                                <label for="inputNumero" class="form-label">Número</label>
                                <input type="number" class="form-control" name="numero" min="0" id="inputNumero" value="{{$cliente->numero}}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputBairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="bairro" min="0" id="inputBairro" value="{{$cliente->bairro}}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputComplemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" name="complemento" min="0" id="inputComplemento" value="{{$cliente->complemento}}" required>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                <a href="{{url('/painel/clientes')}}" class="btn btn-white" type="button">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Fim Sessao -->
@endsection
