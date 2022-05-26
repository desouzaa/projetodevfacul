<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nome_pet');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_raca');
            $table->unsignedBigInteger('id_pelagem');
            $table->unsignedBigInteger('id_tamanho');
            $table->string('descricao');
            $table->foreign('id_cliente')->references('id')->on('clients');
            $table->foreign('id_raca')->references('id')->on('racas');
            $table->foreign('id_pelagem')->references('id')->on('pelagens');
            $table->foreign('id_tamanho')->references('id')->on('tamanhos');
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
        Schema::dropIfExists('pets');
    }
}
