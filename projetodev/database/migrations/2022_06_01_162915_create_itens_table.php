<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_pedido');
        $table->unsignedBigInteger('id_servico');
        $table->integer('qtd');
        $table->float('preco_unitario');
        $table->float('desconto');
        $table->foreign('id_pedido')->references('id')->on('pedidos');
        $table->foreign('id_servico')->references('id')->on('servicos');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens');
    }
}
