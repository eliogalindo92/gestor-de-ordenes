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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->bigIncrements('id_orden');
            $table->unsignedBigInteger('id_entidad');
            $table->string('numero_orden', 10);
            $table->timestamp('fecha_elaboracion');
            $table->string('codigo_producto', 60);
            $table->string('descripcion_producto');
            $table->string('unidad_medida', 10);
            $table->float('cantidad_ordenada');
//            $table->float('cantidad_despachada')->nullable();
            $table->float('existencia_en_almacen');
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
        Schema::dropIfExists('ordenes');
    }
};