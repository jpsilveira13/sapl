<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsiged();
            $table->integer('modalidade_id')->unsigned();
            $table->integer('situacao_id')->unsigned();
            $table->integer('orgao_id')->unsigned();
            $table->string('titulo',250);
            $table->text('comunicado');
            $table->timestamp('data_publicacao')->nullable();
            $table->timestamp('data_abertura')->nullable();
            $table->string('local',250);
            $table->string('objeto',250);
            $table->string('numero_processo',250);
            $table->string('url_contrato',250);
            $table->foreign('modalidade_id')->references('id')->on('modalidade');
            $table->foreign('situacao_id')->references('id')->on('situacao');
            $table->foreign('orgao_id')->references('id')->on('orgao');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('licitacao');
    }
}
