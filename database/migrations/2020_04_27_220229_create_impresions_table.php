<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpresionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresions', function (Blueprint $table) {
            $table->id();
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->integer('impresora_id')->unsigned();
            $table->foreign('impresora_id')->references('id')->on('impresoras');      
            $table->string('impresion');
            $table->integer('hojas');
            $table->string('nomDocumento');
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
        Schema::dropIfExists('impresions');
    }
}
