<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('categoria_id');
            $table->integer('lugares_id');
            $table->dateTime('inicia');
            $table->dateTime('finaliza');
            $table->integer('recurrencia');
            $table->integer('duracion');
            $table->text('desc_evento');
            $table->integer('restriccion');
            $table->integer('pro_calificacion');
            $table->integer('planeo_asis');
            $table->integer('estado');
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
        Schema::dropIfExists('eventos');
    }
}
