<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'data_venda',
        'total',
        'cliente_id',
    ];
    protected  $primaryKey = 'id';
    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function produtos_pedidos() {
        return $this->hasMany(ProdutosPedido::class);
    }
}
