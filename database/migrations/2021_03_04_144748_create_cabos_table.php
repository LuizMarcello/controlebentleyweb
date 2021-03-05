<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabos', function (Blueprint $table) {
            $table->id();
            $table->char('banda');
            $table->string('datanota');
            $table->string('marca');
            $table->string('metros');
            $table->string('notafiscal');
            $table->string('tipodecabo');
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
        Schema::dropIfExists('cabos');
    }
}
