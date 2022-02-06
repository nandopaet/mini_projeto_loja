<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'valor',
    ];

    public function carrinhos() {
        return $this->belongsToMany(Carrinho::class);
    }
}
