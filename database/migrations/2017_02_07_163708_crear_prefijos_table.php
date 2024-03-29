<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearPrefijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefijos', function (Blueprint $table) {
            $table->integer('idprefijo',10);
            $table->string('nombre');
            $table->string('prefijo');
            $table->integer('inicial');
            $table->integer('actual');
            $table->integer('final');
            $table->integer('user_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prefijos');
    }
}
