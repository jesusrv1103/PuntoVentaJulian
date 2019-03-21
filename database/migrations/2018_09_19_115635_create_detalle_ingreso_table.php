<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleIngresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ingreso', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idingreso')->unsigned();
            $table->foreign('idingreso')->references('id')->on('ingreso');


            $table->integer('idarticulo')->unsigned();
            $table->foreign('idarticulo')->references('id')->on('articulo');
            $table->integer('cantidad');
            $table->double('precio_compra');
            $table->double('precio_venta');

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
        Schema::drop('detalle_ingreso');
    }
}
