<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $fillable = [
        'ip'
    ];

    public $timestamps = false;

    public function carrinho_produto() {
        return $this->hasMany(CarrinhoProduto::class);
    }
}
