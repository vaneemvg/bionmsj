<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->string('nombre');
            $table->integer('user_id')->unsigned();
            $table->unique(['nombre', 'cliente_id']);

            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();

        });

        Schema::create('lista_tag', function (Blueprint $table) {
            $table->integer('lista_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('lista_id')->references('id')->on('listas');//onDelete borra en cascada en caso de borrarse listas
            $table->foreign('tag_id')->references('id')->on('tags');//onDelete borra en cascada en caso de borrarse tags

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
        Schema::dropIfExists('tags');
        Schema::dropIfExists('lista_tag');
    }
}
