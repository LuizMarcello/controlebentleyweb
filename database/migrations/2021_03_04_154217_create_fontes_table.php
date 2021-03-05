<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFontesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fontes', function (Blueprint $table) {
            $table->id();
            $table->char('banda');
            $table->string('datanota');
            $table->string('marca');
            $table->string('modelo');
            $table->string('notafiscal');
            $table->string('serial');
            $table->string('situacao');
            $table->string('voltagem');
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
        Schema::dropIfExists('fontes');
    }
}
