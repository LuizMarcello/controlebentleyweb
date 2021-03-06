<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoteadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roteadors', function (Blueprint $table) {
            $table->id();
            $table->char('banda');
            $table->char('datanota');
            $table->string('marca');
            $table->string('macaddress');
            $table->string('modelo');
            $table->string('notafiscal');
            $table->string('serial');
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
        Schema::dropIfExists('roteadors');
    }
}


