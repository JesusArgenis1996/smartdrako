<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre_empleado');
            $table->string('RFC');
            $table->string('puesto')->nullable();
            $table->BigInteger('sucursal_id')->unsigned();
            $table->foreign('sucursal_id')
                    ->references('id')
                    ->on('sucursales')
                    ->onCascade('delete');
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
        Schema::dropIfExists('empleados');
    }
}
