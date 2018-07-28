<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nombre', 60);
            $table->enum('validacion', ['NUMERICO', 'ALFANUMERICO', 'ENUM', 'FECHA', 'HORA', 'FECHAHORA', 'BOOLEAN']);
            $table->enum('uso', ['USER', 'ADMIN'])->default('USER');
            $table->string('aplica', 60);
            $table->string('valor');

            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });


        Schema::create('user_configuracion', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('configuracion_id')->unsigned();
            $table->string('valor');
            $table->enum('estado', ['ACTIVA', 'INACTIVA'])->default('ACTIVA');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('configuracion_id')->references('id')->on('configuraciones');

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
        Schema::dropIfExists('configuraciones');
        Schema::dropIfExists('user_configuracion');
    }
}
