<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoradoresTable extends Migration
{
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->id('id_morador');
            $table->string('nome');
            $table->string('email')->unique();
            $table->foreignId('id_apartamento')->constrained('apartamentos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('moradores');
    }
}
