<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->increments('idLibro');
            $table->string('titulo');
            $table->integer('id_Autor')->unsigned();
            $table->foreign('id_Autor')->references('idAutor')->on('tb_autores')->onDelete('cascade');
            $table->integer('paginas');
            $table->string('editorial');
            $table->string('emailEdi');
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
        Schema::dropIfExists('tb_libros');
    }
};
