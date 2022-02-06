<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutosPedido extends Model
{
    protected $table = 'produtos_pedidos';

    protected $fillable = [
        'quantidade'
    ];
    public $timestamps = false;
    protected $primaryKey = 'produto_id';

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function pedido()
    {
        return $this->hasManyThrough(ProdutosPedido::class, Pedido::class);
    }
}
