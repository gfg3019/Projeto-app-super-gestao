<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'descricao','peso','unidade_id'];
}

//use App\Models\Produto::create(['nome' => 'Geladeira', 'descricao' => 'Geladeira/Refrigerador frost free 375 litro','peso' => 60, 'unidade_id' => 1]);
//use App\Models\Produto::create(['nome' => 'Smart tv', 'descricao' => 'Smart tv philips 32 polegadas','peso' => 8, 'unidade_id' => 1]);
