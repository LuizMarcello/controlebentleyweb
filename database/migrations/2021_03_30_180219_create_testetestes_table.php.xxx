<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestetestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testetestes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->text('nome_razaosocial')->nullable();
            $table->string('ie_rg')->nullable();
            $table->string('documento')->nullable();
            $table->text('nome_contato')->nullable();
            $table->string('celular1')->nullable();
            $table->string('celular2')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('email')->nullable();
            $table->string('instalador')->nullable();
            $table->string('banda');
            $table->string('formapagamento');
            $table->foreign('instalador')->references('nome')->on('tecnicos')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testetestes');
    }
}
