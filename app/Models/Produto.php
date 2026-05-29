<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // 1. Caso seu banco seja case-sensitive e dê erro, avise qual é a tabela:
    protected $table = 'produtos';

    // 2. IMPORTANTE: Desativar os campos de data 'created_at' e 'updated_at' 
    // (já que você criou a tabela na mão e ela não tem essas colunas)
    public $timestamps = false;

    // 3. Campos que podem ser preenchidos via formulário
    protected $fillable = [
        'nome',
        'imagem',
        'categoria',
        'preco',
        'test',
        'estoque'
    ];
}
