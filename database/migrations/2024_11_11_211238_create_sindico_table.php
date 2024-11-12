<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSindicoTable extends Migration
{
    public function up()
    {
        Schema::create('sindico', function (Blueprint $table) {
            $table->id('id_sindico');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('foto_perfil')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sindico');
    }
}
