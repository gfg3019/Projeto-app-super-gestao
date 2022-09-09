<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;
    protected $fillable = ['unidade', 'descricao'];
}

//use App\Models\Unidade::create(['unidade' => 'UN', 'descricao' => 'Unidade']);
