<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre_sucursal')->unique();
            $table->string('nombre_calle')->nullable();
            $table->string('nombre_colonia')->nullable();
            $table->integer('numero_exterior')->nullable();
            $table->integer('numero_interior')->nullable();
            $table->integer('codigo_postal')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('pais')->nullable();
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
        Schema::dropIfExists('sucursales');
    }
}
