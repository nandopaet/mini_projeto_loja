@extends('site.template')
@section('title', 'Home')
@section('content_header')
    Home Sistema
@endsection
@section('content_tempalte')
@section('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
    <!-- Início Sessao -->

    <main class="container">
        <div class="row">
            <h3 class="ultimos_cadastros"> Informações cliente</h3>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Primeiro acesso?</h5>
                        <p>Preencha as informações abaixo para realizar seu cadastro.</p>
                        <form class="row g-3" METHOD="POST">
                            <div class="col-md-12">
                                <label for="inputNome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" name="nome" id="inputNome" required>
                            </div>
                            <div class="col-md-5">
                                <label for="inputCpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" min="14" max="14" name="cpf" id="inputCpf" required>
                            </div>
                            <div class="col-7">
                                <label for="inputEmail" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="inputEmail" required>
                            </div>
                            <div class="col-12">
                                <label for="inputCep" class="form-label">CEP</label>
                                <input type="text" class="form-control" name="cep" id="inputCep" required>
                            </div>
                            <div class="col-6">
                                <label for="inputCidade" class="form-label">Estado</label>
                                <select class="form-select" name="estado" id="inputEstado" required>
                                    <option selected>Selecione o estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BH">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas GeraiS</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo </option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="inputCidade" required>
                            </div>
                            <div class="col-md-10">
                                <label for="inputLogradouro" class="form-label">Logradouro <smal>(* Rua)</smal></label>
                                <input type="text" class="form-control" name="logradouro" id="inputLogradouro" required>
                            </div>
                            <div class="col-md-2">
                                <label for="inputNumero" class="form-label">Número</label>
                                <input type="number" class="form-control" name="numero" min="0" id="inputNumero" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputBairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="bairro" min="0" id="inputBairro">
                            </div>
                            <div class="col-md-6">
                                <label for="inputComplemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" name="complemento" min="0" id="inputComplemento" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Concluir cadastro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Já possiu usuário?</h5>
                <p>Informe o e-mail utilizado no cadastrado para realizar o acesso.</p>
                <div class="row">
                    <div class="col-md-12">
                        <label for="inputMailUser" class="form-label">E-mail do usuário</label>
                        <input type="test" class="form-control" name="mailUser" min="0" id="inputMailUser">
                    </div>
                    <div class="col-12 pt-3">
                        <button type="submit" class="btn btn-primary btn_acessar">Acessar conta</button>
                    </div>
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
    <script src="{{ asset('site/assets/js/cliente.js') }}" defer></script>
@endsection
