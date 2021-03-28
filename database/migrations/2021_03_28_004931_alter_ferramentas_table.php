<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFerramentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ferramentas', function (Blueprint $table) {
            $table->string('tipoinstrumento', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ferramentas', function (Blueprint $table) {
            $table->dropColumn('tipoinstrumento');
        });
    }
}
