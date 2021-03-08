<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacaos', function (Blueprint $table) {
            $table->id();
            $table->char('bandaModem');
            $table->string('marcaModem');
            $table->string('modeloModem');
            $table->string('serialModem');

            $table->string('modeloAntena');
            $table->string('diametroAntena');

            $table->char('bandaLnb');
            $table->string('marcaLnb');
            $table->string('modeloLnb');
            $table->string('serialLnb');

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
        Schema::dropIfExists('designacaos');
    }
}



