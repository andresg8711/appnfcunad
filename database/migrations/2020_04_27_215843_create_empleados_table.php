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
            $table->id();
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->string('nombre');
            $table->string('apellido');            
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
