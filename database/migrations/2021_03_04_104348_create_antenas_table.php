<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antenas', function (Blueprint $table) {
            $table->id();
            $table->char('banda');
            $table->string('datanota');
            $table->string('diametro');
            $table->string('marca');
            $table->string('modelo');
            $table->string('notafiscal');
            $table->string('situacao');
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
        Schema::dropIfExists('antenas');
    }
}
