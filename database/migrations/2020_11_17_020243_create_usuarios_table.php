<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipo_usuarios_id');
            $table->string('nombre', 70);
            $table->string('apellido', 70);
            $table->string('email', 100);
            $table->string('pass', 100);
            $table->string('barrio', 150)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('foto_perfil', 200)->nullable();
            $table->string('foto_portada', 200)->nullable();
            $table->string('genero_artistico', 200)->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('estado');
            $table->timestamps();

            $table->foreign('tipo_usuarios_id')->references('id')->on('tipo_usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
