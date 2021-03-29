<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tipodeequipamento');
            $table->integer('user_id')->unsigned();
            $table->string('notafiscal')->nullable();
            $table->string('datanota')->nullable();
            $table->string('banda')->nullable();
            $table->string('qtde')->nullable();
            $table->string('tipo')->nullable();
            $table->string('diametro')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('voltagem')->nullable();
            $table->string('serial')->nullable();
            $table->string('macaddress')->nullable();
            $table->string('situacao');
            $table->text('observacao')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipamentos');
    }
}
