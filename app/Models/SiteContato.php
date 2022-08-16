<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    use HasFactory;
    protected $table = 'site_contatos';
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
//$contato = SiteContato::where('nome', '<>', 'Genisson')->whereIn('motivo_contato', [])->whereBetween('created_at', ['2022-08-10 14:58:41', '2022-08-10 15:07:42']);
//$contatos = SiteContato::where('nome', '<>', 'Genisson')->orWhereIn('motivo_contato', [1, 2])->orWhereBetween('created_at', ['2022-08-10 14:58:41', '2022-08-10 15:07:42']);
//$contatos3 = SiteContato::where(function($query){$query->where('nome', 'Isabel Santos')->orWhere('nome', 'Fernando');})->where(function ($query){$query->whereIn('motivo_contato', [1, 2])->orWhereBetween('id', [2, 6]);})->get();
