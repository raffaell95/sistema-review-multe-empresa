<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['id_produtos', 'id_usuario', 'quantidade', 'forma_pagamento'];  
}
