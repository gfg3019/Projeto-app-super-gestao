<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato()
    {
        $motivo_contatos = MotivoContato::all();
        //dd($motivo_contatos);

        //enviando os dados no banco de dados
        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }
    public function saveContato(Request $request){
        /*$contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        //dd($contato);
        $contato->save();*/

        //outra forma de percistir dados
        /*$contato2 = new SiteContato();
        $contato2->fill($request->all());
        $contato2->save();*/

        $request->validate(
            [
                'nome' => 'required|unique:site_contatos',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000',
            ],
            [
                'nome.required' => 'O campo nome precisa ser preenchido.',
                'nome.unique' => 'O campo tem que ser unico.',
                'email.email' => 'precisa ser um email valido.',
                'motivo_contatos_id.required' => 'Escolha um dos campos.',
                'mensagem.required' => 'O campo de mensagem presiza ser preenchido.',
                'mensagem.max' => 'Tem que a ver no maxímo 2000 caracteres.'
            ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
