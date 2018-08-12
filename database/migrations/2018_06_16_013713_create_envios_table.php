<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->enum('tipo', ['SMS', 'WAPP', 'MAIL']);
            $table->date('fecha');
            $table->text('texto');
            $table->enum('estado', ['PENDIENTE', 'CANCELADO', 'ENVIADO'])->default('PENDIENTE');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->timestamps();
        });

        Schema::create('campaign_envio', function (Blueprint $table) {
            $table->integer('campaign_id')->unsigned();
            $table->integer('envio_id')->unsigned();

            $table->foreign('campaign_id')->references('id')->on('campaigns');
            $table->foreign('envio_id')->references('id')->on('envios');

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
        Schema::dropIfExists('envios');
        Schema::dropIfExists('campaign_envio');
    }
}
