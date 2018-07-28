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
			$table->enum('tipo',['SMS','WAPP','MAIL']);
			$table->string('remitente',60);
			$table->date('fecha');
			$table->integer('rango_id')->unsigned();
			$table->boolean('desuscribe');
			$table->enum('estado',['PENDIENTE','CANCELADO','ENVIADO'])->default('PENDIENTE');
			$table->integer('user_id')->unsigned();
			
			$table->foreign('rango_id')->references('id')->on('rangoshorarios');
			$table->foreign('user_id')->references('id')->on('users');
			
            $table->timestamps();
        });
		
		Schema::create('campaign_envio', function (Blueprint $table){
			$table->integer('campaign_id')->unsigned();
			$table->integer('envio_id')->unsigned();
			
			$table->foreign('campaign_id')->references('id')->on('campaigns');
			$table->foreign('envio_id')->references('id')->on('envios');
			
			$table->timestamps();
		});
		
		Schema::create('contacto_envio', function (Blueprint $table){
			$table->integer('contacto_id')->unsigned();
			$table->integer('envio_id')->unsigned();
			$table->enum('campo_tipo',['TELEFONO','MAIL']);
			$table->string('campo_valor');
			$table->enum('estado',['ENVIADO','NOENVIADO','RECHAZADO'])->default('NOENVIADO');
			
			$table->foreign('contacto_id')->references('id')->on('contactos');
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
    }
}
