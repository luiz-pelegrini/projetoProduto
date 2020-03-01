<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUTOS', function (Blueprint $table) {
            $table->bigIncrements('ID_PRODUTO_PRD');
            $table->string('ST_DESCRICAO_PRD');
            $table->integer('ID_CONTACATEGORIA_CC')->unsigned();
            $table->foreign('ID_CONTACATEGORIA_CC')->references('ID_CONTACATEGORIA_CC')->on('CONTA_CATEGORIA')->onDelete('cascade');
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
        Schema::dropIfExists('PRODUTOS');
    }
}
