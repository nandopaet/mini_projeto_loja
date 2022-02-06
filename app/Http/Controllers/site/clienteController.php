<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use MongoDB\Driver\Session;


class clienteController extends Controller
{
    public function index()
    {
        return view('site.cliente.index');

    }

    public function adicionar(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules(), $this->mensagens());
        if ($validator->fails()) {
            return json_encode(['status' => false]);
        }
        $cliente = new Cliente();

        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
        $cliente->estado = $request->estado;
        $cliente->cep = $request->cep;
        $cliente->cidade = $request->cidade;
        $cliente->bairro = $request->bairro;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->complemento = $request->complemento;
        $cliente->saveOrFail();
        $request->session()->put('cliente_info', $cliente->id);
        return json_encode(['status' => true]);
    }

    public function acessarConta(Request $request)
    {
        $cliente = Cliente::where('email', $request->email)->first();
        if (!is_null($cliente)) {
            $request->session()->put('cliente_info', $cliente->id);
            return json_encode(['status' => true]);
        }
        return json_encode(['status' => false]);
    }


    protected function rules()
    {
        return [
            'nome' => 'required',
            'cpf' => 'required|unique:clientes,cpf',
            'email' => 'required|unique:clientes,email',
            'estado' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'complemento' => 'required'
        ];
    }

    protected function mensagens()
    {
        return [
            'same' => 'The :attribute and :other must match.',
            'size' => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in' => 'The :attribute must be one of the following types: :values',
            'required' => 'O campo :attribute é obrigatório.',
        ];
    }


}
