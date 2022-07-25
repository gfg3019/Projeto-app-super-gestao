<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>
            [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '1231321321231',
                'ddd' => '21',//Rio de Janeiro
                'telefone' => '0000-0000'
            ],
            1 =>
            [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'ddd' => '11',//São Paulo
                'telefone' => '1111-1111'
            ],

            2 =>
            [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '984984989894',//Fortaleza
                'ddd' => '85',
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedores.index', compact('fornecedores'));
        //return view('app.fornecedores.index');
    }
}
