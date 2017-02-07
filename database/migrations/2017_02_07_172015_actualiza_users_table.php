<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('estado_id')->unsigned();
            $table->integer('empresa_id')->unsigned();

            $table->foreign('estado_id')->references('id')->on('estado_usuarios');
            $table->foreign('empresa_id')->references('id')->on('carrito');
        });
    }
}
