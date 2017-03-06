<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacaoDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacao_documento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licitacao_id')->unsiged();
            $table->string('titulo',200);
            $table->integer('tamanho');
            $table->string('url_pdf');
            $table->foreign('licitacao_id')->references('id')->on('licitacao');
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
        Schema::dropIfExists('licitacao_documento');
    }
}
