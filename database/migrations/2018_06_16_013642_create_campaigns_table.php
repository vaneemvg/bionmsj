<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('cliente_id')->unsigned();
			$table->string('nombre');
			$table->enum('estado',['FINALIZADA','PENDIENTE','BORRADOR'])->default('PENDIENTE');
			$table->integer('user_id')->unsigned();

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
        Schema::dropIfExists('campaigns');
    }
}
