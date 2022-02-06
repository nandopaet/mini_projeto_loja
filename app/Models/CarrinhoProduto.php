<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrinhoProduto extends Model
{
    protected $table = 'carrinhos_produtos';

    protected $fillable = [
        'carrinho_id',
        'produto_id',
        'quantidade'
    ];

    protected  $primaryKey = 'produto_id';
    public $timestamps = false;

    public function carrinho()
    {
        return $this->belongsTo(Carrinho::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
