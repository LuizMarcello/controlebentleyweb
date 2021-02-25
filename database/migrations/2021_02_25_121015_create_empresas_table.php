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
            $table->char('celular', 9);
            $table->string('email', 100);
            $table->char('telefone', 9)->nullable();

            $table->char('cep', 8);
            $table->string('logradouro', 100);
            $table->string('cidade', 50);
            $table->char('estado', 2);

            $table->text('observacao', 200)->nullable();

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
