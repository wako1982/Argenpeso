<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('nro_credito');
            $table->string('dni');
            $table->string('nombre_usuario');
            $table->string('email_usuario');
            $table->string('telefono_usuario');
            $table->string('estudio_asignado');
            $table->string('tel_estudio_asignado');
            $table->string('nombre_deuda');
            $table->date('fecha_moral');
            $table->date('fecha_actividad');




            $table->unsignedBigInteger('deuda_id');
            $table->foreign('deuda_id')->references('id')->on('deudas')->onDelete('cascade')->onUpdate('cascade');






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
        Schema::dropIfExists('reportes');
    }
}
