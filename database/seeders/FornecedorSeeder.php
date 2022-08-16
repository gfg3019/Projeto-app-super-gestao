<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando a classe Fornecedor
        $fornecedores = new Fornecedor();
        $fornecedores->nome = 'Única';
        $fornecedores->site = 'unica.com.br';
        $fornecedores->uf = 'SP';
        $fornecedores->email = 'unicaeditora@unica.com.br';
        $fornecedores->save();

        //usando o método estático create()
        Fornecedor::create([
            'nome' => 'Rocco',
            'site' => 'roccoeditora.com.br',
            'uf' => 'RJ',
            'email' => 'rocco@email.com.br'
        ]);

        //usando o método insert

        DB::table('fornecedores')->insert([
            'nome' => 'Motorola',
            'site' => 'motorola.com.br',
            'uf' => 'SP',
            'email' => 'motorola@motorola.com.br'
        ]);
    }
}
