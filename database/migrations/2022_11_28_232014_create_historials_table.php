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
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            //relacion con la tabla bodegas
            $table->unsignedBigInteger('id_bodega_origen');
            $table->foreign('id_bodega_origen')->references('id')->on('bodegas');
            $table->unsignedBigInteger('id_bodega_destino');
            $table->foreign('id_bodega_destino')->references('id')->on('bodegas');

            //relacion con la tabla inventarios
            $table->unsignedBigInteger('id_inventario');
            $table->foreign('id_inventario')->references('id')->on('inventarios');
            
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('historials');
    }
};
