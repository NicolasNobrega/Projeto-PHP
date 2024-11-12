<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasLazerTable extends Migration
{
    public function up()
    {
        Schema::create('areas_lazer', function (Blueprint $table) {
            $table->id('id_area_lazer');
            $table->string('nome');
            $table->integer('capacidade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('areas_lazer');
    }
}
