<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class clientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('admin.cliente.index', ['clientes' => $clientes]);
    }

    public function ver($id)
    {
        $cliente = Cliente::find($id)->first();
        return view('admin.cliente.ver', ['cliente' => $cliente]);
    }

    public function adicionar(Request $request)
    {
        if (isset($request->cpf) && !empty($request->cpf)) {
            $cliente = new Cliente();
            $validator = Validator::make($request->all(), $this->rules(), $this->mensagens());
            if ($validator->fails()) {
                return back()
                    ->withInput()
                    ->withErrors($validator);
            }

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
            $cliente->save();

            return redirect('/painel/clientes');
        }
        return view('admin.cliente.novo');

    }

    public function editar($id, Request $request)
    {
        $cliente = Cliente::find($id)->first();

        if (isset($request->cpf) && !empty($request->cpf)) {
            $validator = Validator::make($request->all(), $this->rules($id), $this->mensagens());
            if ($validator->fails()) {
                return back()
                    ->withInput()
                    ->withErrors($validator);
            }

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
            $cliente->update();

            return redirect('/painel/clientes');
        }
        return view('admin.cliente.editar', ['cliente' => $cliente]);

    }

    public function deletar($id)
    {

        $cliente = Cliente::find($id)->first();
        $cliente->forceDelete();
        return redirect('/painel/clientes');
    }

    protected function rules($id = null)
    {
        return [
            'nome' => 'required',
            'cpf' => 'required|unique:clientes,cpf,' . (is_null($id) ? "" : $id),
            'email' => 'required|unique:clientes,email,' . (is_null($id) ? "" : $id),
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
