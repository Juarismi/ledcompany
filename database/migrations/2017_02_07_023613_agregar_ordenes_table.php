<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('nombre_prefijo');
            $table->string('numero_prefijo');
            $table->datetime('fecha');
            $table->decimal('impuesto',9,2);
            $table->decimal('total_venta',9,2);
            $table->integer('estado_id')->unsigned()->default('1');
            $table->timestamps();
            $table->foreign('estado_id')->references('id')->on('estado_ordenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ordenes');
    }
}
