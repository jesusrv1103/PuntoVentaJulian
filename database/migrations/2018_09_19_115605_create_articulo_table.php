<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Categoria')->unsigned();
            $table->foreign('id_Categoria')->references('id')->on('categoria');
            $table->string('codigo');
            $table->string('nombre');
            $table->integer('stock');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('estado');
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
        Schema::drop('articulo');
    }
}
