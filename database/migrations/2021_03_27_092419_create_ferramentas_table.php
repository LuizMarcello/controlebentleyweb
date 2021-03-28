<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFerramentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramentas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->string('classificacao');
            $table->string('controle');
            $table->string('categoria');
            $table->string('medida');
            $table->text('Descricao')->nullable();
            $table->string('Qtde')->nullable();
            $table->string('situacao');
            $table->text('responsavel')->nullable();
            $table->string('desde')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ferramentas');
    }
}
