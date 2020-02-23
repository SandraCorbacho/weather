<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiempo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempo', function (Blueprint $table) {
            $table->string('ciudad')->index();
            $table->integer('temperatura');
            $table->integer('codigo_posta',5);
            $table->integer('viento');
            $table->string('icono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiempo');
    }
}
