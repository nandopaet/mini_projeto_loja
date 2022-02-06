<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'logradouro',
        'complemento',
        'numero',
        'email',
    ];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

}
