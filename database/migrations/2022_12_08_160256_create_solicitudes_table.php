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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id_solicitud');
            $table->unsignedBigInteger('id_entidad');
            $table->string('numero_solicitud', 10);
            $table->timestamp('fecha_solicitud');
            $table->string('descripcion_producto');
            $table->string('unidad_medida_producto', 10);
            $table->float('cantidad_solicitada');
            $table->foreign('id_entidad')->references('id_entidad')->on('entidades')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('solicitudes');
    }
};
