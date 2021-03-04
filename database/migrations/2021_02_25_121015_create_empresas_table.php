<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();

            $table->char('tipo', 10);

            $table->string('nome');
            $table->string('razao_social')->nullable();
            $table->char('documento', 14);
            $table->char('ie_rg', 25)->nullable();

            $table->string('nome_contato', 100);
            $table->char('celular', 11);
            $table->string('email', 100);
            $table->char('telefone', 10)->nullable();

            $table->char('cep', 8);
            $table->string('logradouro', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->char('estado', 2);

            $table->text('observacao', 200)->nullable();

            $table->char('banda', 2);
            $table->string('datadanota', 12);
            $table->char('diametro', 6);
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->string('notafiscal', 20);
            $table->char('qtde', 20);
            $table->char('metros', 6);
            $table->string('tipodecabo', 12);
            $table->char('datacadastro', 15);
            $table->string('designacao', 15);
            $table->string('instalador', 30);
            $table->string('distribuidor', 30);
            $table->string('migracao', 30);
           
            $table->string('plano', 15);
            $table->char('uf_ie', 2);
            $table->char('rua', 30);
            $table->char('numero', 5);
            $table->string('modeloAntena', 12);
            $table->string('marcaAntena', 12);
            $table->string('modeloLnb', 12);
            $table->string('marcaLnb', 12);
            $table->string('serialModem', 12);
            $table->string('serialLnb', 12);
            $table->string('serial', 12);
            $table->char('voltagem', 5);
            $table->char('macaddress', 14);
            $table->char('cir', 14);
            $table->string('equipamento', 14);
            $table->string('valor', 14);
            $table->string('valordecusto', 14);
            $table->string('valormensal', 14);
            $table->string('velocmaxdown', 14);
            $table->string('velocmaxup', 14);
            $table->string('velocmindown', 14);
            $table->string('velocminup', 14);

            $table->boolean('situacao');

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
        Schema::dropIfExists('empresas');
    }
}





