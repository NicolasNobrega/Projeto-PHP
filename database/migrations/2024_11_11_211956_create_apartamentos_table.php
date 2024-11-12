<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentosTable extends Migration
{
    public function up()
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->id('id_apartamento');
            $table->string('numero');
            $table->string('bloco');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apartamentos');
    }
}
