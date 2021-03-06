<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->enum('tipo', ['IMAGEN', 'AUDIO', 'VIDEO', 'PLANTILLA']);
            $table->string('archivo');
            $table->enum('estado',['ACTIVO','INACTIVO'])->default('ACTIVO');
            $table->integer('cliente_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->timestamps();
        });

        Schema::create('envio_archivo', function (Blueprint $table) {
            $table->integer('envio_id')->unsigned();
            $table->integer('archivo_id')->unsigned();

            $table->foreign('archivo_id')->references('id')->on('archivos');
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
        Schema::dropIfExists('archivos');
        Schema::dropIfExists('envio_archivos');
    }
}
