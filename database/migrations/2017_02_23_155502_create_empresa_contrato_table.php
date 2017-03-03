<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_contrato', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licitacao_id')->unsigned();
            $table->string('nome_empresa',250);
            $table->string('cpf_cpnj',50);
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
        Schema::dropIfExists('empresa_contrato');
    }
}
