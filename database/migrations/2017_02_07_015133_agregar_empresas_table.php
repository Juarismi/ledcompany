<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('estado_id')->unsigned();
            $table->string('codigo');
            $table->integer('tipo_id')->unsigned();
            $table->string('nit');
            $table->string('contacto');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('correo');
            $table->string('direccion');
            $table->integer('ciudad_id')->unsigned();
            $table->timestamps();
            $table->foreign('estado_id')->references('id')->on('estado_empresas');
            $table->foreign('tipo_id')->references('id')->on('tipo_empresas');
            $table->foreign('ciudad_id')->references('id')->on('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresas');
    }
}
