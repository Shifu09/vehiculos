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
        Schema::create('salidas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_vehiculo')->foreign('id_vehiculo')->references('id')->on('carros');
            $table->integer('id_chofer')->foreign('id_chofer')->references('id')->on('choferes');
            $table->string('destino');
            $table->string('kilometraje');
            $table->date('fecha');
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('salidas');
    }
};
