<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->string('codigo', 50);
            $table->string('nombre');
            $table->string('telefono', 30);
            $table->string('email');
            $table->enum('estado', ['DESUSCRIPTO', 'SUSCRIPTO'])->default('SUSCRIPTO');
            $table->integer('user_id')->unsigned();

            $table->unique(['telefono', 'cliente_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->timestamps();

        });

        Schema::create('lista_contacto', function (Blueprint $table) {
            $table->integer('lista_id')->unsigned();
            $table->integer('contacto_id')->unsigned();

            $table->foreign('lista_id')->references('id')->on('listas');
            $table->foreign('contacto_id')->references('id')->on('contactos');

            $table->timestamps();
        });

        Schema::create('envio_contacto', function (Blueprint $table) {
            $table->integer('envio_id')->unsigned();
            $table->integer('contacto_id')->unsigned();
            $table->enum('campo_tipo', ['TELEFONO', 'EMAIL']);
            $table->string('campo_valor');
            $table->enum('estado', ['NOENVIADO', 'RECHAZADO', 'ENVIADO'])->default('NOENVIADO');

            $table->foreign('envio_id')->references('id')->on('envios');
            $table->foreign('contacto_id')->references('id')->on('contactos');

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
        Schema::dropIfExists('contactos');
        Schema::dropIfExists('lista_contacto');
        Schema::dropIfExists('envio_contacto');
    }
}
