<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantalla', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('slug',30);
            $table->string('url');
            $table->string('request');
            $table->integer('padre');
            $table->boolean('estado');
            $table->string('icono');
            $table->string('color');
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
        Schema::dropIfExists('pantalla');
    }
}
