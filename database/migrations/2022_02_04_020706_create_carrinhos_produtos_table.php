<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrinhosProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinhos_produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('carrinho_id');
            $table->unsignedBigInteger('produto_id');
            $table->integer('quantidade');

            $table->foreign('carrinho_id')->references('id')->on('carrinhos')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrinhos_produtos');
    }
}
