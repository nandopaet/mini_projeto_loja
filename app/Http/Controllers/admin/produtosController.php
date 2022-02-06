<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class produtosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produtos.index', ['produtos' => $produtos]);
    }

    public function ver($id)
    {
        $produto = Produto::find($id)->first();
        return view('admin.produtos.ver', ['produto' => $produto]);
    }


    public function adicionar(Request $request)
    {
        if (isset($request->nome) && !empty($request->nome)) {
            $produto = new Produto();
            $validator = Validator::make($request->all(), $this->rules(), $this->mensagens());
            if ($validator->fails()) {
                return back()
                    ->withInput()
                    ->withErrors($validator);
            }

            $produto->nome = $request->nome;
            $produto->valor = $request->valor;
            $produto->save();

            return redirect('/painel/produtos');
        }
        return view('admin.produtos.novo');
    }

    public function editar($id, Request $request)
    {
        $produto = Produto::find($id)->first();

        if (isset($request->nome) && !empty($request->nome)) {
            $validator = Validator::make($request->all(), $this->rules($id), $this->mensagens());
            if ($validator->fails()) {
                return back()
                    ->withInput()
                    ->withErrors($validator);
            }

            $produto->nome = $request->nome;
            $produto->valor = $request->valor;
            $produto->update();

            return redirect('/painel/produtos');
        }
        return view('admin.produtos.editar', ['produto' => $produto]);

    }


    public function deletar($id)
    {
        $produto = Produto::find($id)->first();
        $produto->forceDelete();
        return redirect('/painel/produtos');
    }

    protected function rules($id = null)
    {
        return [
            'nome' => 'required|unique:produtos,nome,' . (is_null($id) ? "" : $id),
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
