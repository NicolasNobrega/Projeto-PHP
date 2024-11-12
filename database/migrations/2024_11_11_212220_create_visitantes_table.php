<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitantesTable extends Migration
{
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->id('id_visitante');
            $table->string('nome');
            $table->foreignId('id_morador')->constrained('moradores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visitantes');
    }
}
