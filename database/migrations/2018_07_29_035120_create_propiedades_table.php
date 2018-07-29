<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 60);
            $table->string('detalle');
            $table->string('validacion');
            $table->string('valor');
            $table->enum('uso', ['USER', 'ADMIN'])->default('USER');
            $table->string('aplica', 60);
            $table->boolean('obliga')->default(false);
            $table->enum('estado', ['ACTIVA', 'INACTIVA'])->default('ACTIVA');

            $table->timestamps();
        });

        Schema::create('envio_propiedad', function (Blueprint $table) {
            $table->integer('envio_id')->unsigned();
            $table->integer('propiedad_id')->unsigned();
            $table->string('valor');

            $table->foreign('envio_id')->references('id')->on('envios');
            $table->foreign('propiedad_id')->references('id')->on('propiedades');

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
        Schema::dropIfExists('propiedades');
        Schema::dropIfExists('envio_propiedad');
    }
}
