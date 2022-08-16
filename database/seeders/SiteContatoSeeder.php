<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\SiteContato;


class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(21) 99999-9999';
        $contato->email = 'contato@contato.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Essa é uma mensagem...';
        $contato->save();*/

        SiteContato::factory()->count(200)->create();
    }
}
