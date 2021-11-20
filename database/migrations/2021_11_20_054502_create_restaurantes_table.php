<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('slug',100);
            $table->string('saludo');
            $table->text('texto_principal');
            $table->string('slogan');
            $table->integer('imagen_id');
            $table->string('instagram_url');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('whatsapp_url');
            $table->text('descripcion');
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
        Schema::dropIfExists('restaurante');
    }
}
