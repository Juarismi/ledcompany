<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcategoria_id')->unsigned();
            $table->integer('user_id')->unsigned()->index();
            $table->string('referencia');
            $table->string('vatiaje');
            $table->string('unid_por_empaque');
            $table->string('precio_unitario');
            $table->string('lumen');
            $table->string('temp_color');
            $table->string('factor_pf');
            $table->string('dimensiones');
            $table->string('corte_de_techo');
            $table->string('lugares_de_uso');
            $table->timestamps();
             $table->softDeletes(); // <-- This will add a deleted_at field
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
