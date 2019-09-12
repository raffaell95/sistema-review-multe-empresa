<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   protected $fillable = ['nome_produto', 'numero', 'imagem_produto', 'descricao', 'categoria'];
}
