<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('banda');
            $table->string('modem');
            $table->string('antena');
            $table->string('lnb');
            $table->string('buc-transmitter');
            $table->string('ilnb');
            $table->string('tria');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designacoes');
    }
}
