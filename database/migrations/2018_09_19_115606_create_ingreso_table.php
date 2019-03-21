<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idproveedor')->unsigned();
            $table->string('serie_comprobante');
            $table->string('tipo_comprobante');
            $table->string('num_comprobante');
            $table->string('fecha_hora');
            $table->double('impuesto');
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
        Schema::drop('ingreso');
    }
}
