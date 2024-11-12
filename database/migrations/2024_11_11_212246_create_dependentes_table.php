<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependentesTable extends Migration
{
    public function up()
    {
        Schema::create('dependentes', function (Blueprint $table) {
            $table->id('id_dependente');
            $table->string('nome');
            $table->foreignId('id_morador')->constrained('moradores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dependentes');
    }
}
