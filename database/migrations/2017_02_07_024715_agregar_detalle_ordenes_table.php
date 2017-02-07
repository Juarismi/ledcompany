<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarDetalleOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrito_id')->unsigned();
            $table->integer('orden_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->integer('precio_unitario');
            $table->integer('cantidad_cajas');
            $table->decimal('descuento',8,2);
            $table->timestamps();
            $table->foreign('carrito_id')->references('id')->on('carrito');
            $table->foreign('orden_id')->references('id')->on('ordenes');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_ordenes');
    }
}