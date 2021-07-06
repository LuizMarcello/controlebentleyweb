<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->text('nome_razaosocial')->nullable();
            $table->string('ie_rg')->nullable();
            $table->string('documento')->nullable();
            $table->string('inscricaomunicipal')->nullable();
            $table->string('datanascimento')->nullable();
            $table->text('nome_contato')->nullable();
            $table->string('celular1')->nullable();
            $table->string('celular2')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('email')->nullable();
            $table->string('chave')->nullable();
            $table->string('equipamento')->nullable();
            $table->string('dataadesao')->nullable();
            $table->string('datacadastro')->nullable();
            $table->text('observacao')->nullable();
            $table->string('cep1')->nullable();
            $table->text('rua1')->nullable();
            $table->string('numero1')->nullable();
            $table->string('bairro1')->nullable();
            $table->string('cidade1')->nullable();
            $table->string('estado1')->nullable();
            $table->string('celular11')->nullable();
            $table->string('telefone11')->nullable();
            $table->string('cep2')->nullable();
            $table->text('rua2')->nullable();
            $table->string('numero2')->nullable();
            $table->string('bairro2')->nullable();
            $table->string('cidade2')->nullable();
            $table->string('estado2')->nullable();
            $table->string('celular21')->nullable();
            $table->string('telefone21')->nullable();
            $table->string('cep3')->nullable();
            $table->text('rua3')->nullable();
            $table->string('numero3')->nullable();
            $table->string('bairro3')->nullable();
            $table->string('cidade3')->nullable();
            $table->string('estado3')->nullable();
            $table->string('celular31')->nullable();
            $table->string('telefone31')->nullable();
            $table->string('status');
            $table->string('banda');
            $table->string('formapagamento');
            $table->string('instalador');
            $table->string('distribuidor');
            $table->string('plano');
            $table->string('representante');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
