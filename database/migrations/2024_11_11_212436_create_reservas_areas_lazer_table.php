<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasAreasLazerTable extends Migration
{
    public function up()
    {
        Schema::create('reservas_areas_lazer', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->foreignId('id_morador')->constrained('moradores');
            $table->foreignId('id_area_lazer')->constrained('areas_lazer');
            $table->date('data_reserva');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas_areas_lazer');
    }
}
