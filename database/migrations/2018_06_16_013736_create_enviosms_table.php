<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enviosms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('envio_id')->unsigned()->unique();
			$table->string('asunto');
			$table->text('texto');
            $table->integer('archivo_id')->unsigned();

			$table->foreign('envio_id')->references('id')->on('envios');
            $table->foreign('archivo_id')->references('id')->on('archivos');

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
        Schema::dropIfExists('enviosms');
    }
}
