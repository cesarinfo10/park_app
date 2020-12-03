<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_lugar', 150);
            $table->text('descripcion');
            $table->string('direccion', 150);
            $table->string('contacto', 150);
            $table->string('observaciones', 250);
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
        Schema::dropIfExists('lugares');
    }
}
