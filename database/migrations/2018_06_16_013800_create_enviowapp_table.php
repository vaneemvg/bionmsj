<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviowappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enviowapp', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('envio_id')->unsigned()->unique();
			$table->text('texto');
			$table->string('perfilimg');
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
        Schema::dropIfExists('enviowapp');
    }
}
