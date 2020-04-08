<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('citas');
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('fechaHora');
            $table->string('espacio', 100);
            $table->string('nombre', 100);
            $table->string('servicio', 250);
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
        Schema::dropIfExists('citas');
    }
}
