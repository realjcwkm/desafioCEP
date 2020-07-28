<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'Locais';
    protected $fillable = [
        'nome',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'bairro',
        'uf',
        'cidade',
        'data'
    ];
}
