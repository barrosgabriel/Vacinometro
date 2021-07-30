<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacinacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacinacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dia');
            $table->integer('dosesRecebidas');
            $table->integer('dosesAplicadas');
            $table->integer('primeiraDoseAplicada');
            $table->integer('segundaDoseAplicada');
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
        Schema::dropIfExists('vacinacaos');
    }
}
