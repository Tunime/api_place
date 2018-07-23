<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNegocios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
                     
            $table->increments('id');
            $table->string('nombre',45);
            $table->string('descripcion',45);
            $table->time('hora_abrir') -> nullable();
            $table->time('hora_cierre') -> nullable();
            $table->integer('categorias_id')-> unsigned();
            $table->foreign('categorias_id')-> references('id')-> on('categorias');
            $table->string('especialidad',150) -> nullable();
            $table->string('longitud',45) -> nullable();
            $table->string('latitud',45) -> nullable();
            $table->integer('ciudades_id')-> unsigned();
            $table->foreign('ciudades_id')-> references('id')-> on('ciudades');


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negocios');
    }
}
