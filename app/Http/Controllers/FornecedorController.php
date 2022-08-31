<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {
        $fornecedores = new Fornecedor();
        $fornecedores->where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->get();
        dd($fornecedores);
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request){
        $msg = '';
        if($request->input('_token') != ''){
            //validação
            $regras = [
                'nome' => 'required',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido.',
                'uf.min' => 'O campo deve conter no minimo 2 caracteres',
                'uf.max' => 'O campo deve conter no maximo 2 caracteres',
                'email.email' => 'O campo email não foi preenchido'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());
            $msg = 'Cadastro realizado com sucesso!';
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }
}
