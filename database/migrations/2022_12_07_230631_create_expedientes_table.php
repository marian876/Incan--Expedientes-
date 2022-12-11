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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();

            $table->string('nro_expediente')->unique();
            $table->string('id_proceso');
            $table->string('nombre_paciente');
            $table->string('ruta_original');
            $table->string('ubicacion_digital');
            $table->string('ubicacion_fisica');
            $table->string('estado_exp');
            $table->string('estado_paciente');

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
        Schema::dropIfExists('expedientes');
    }
};
