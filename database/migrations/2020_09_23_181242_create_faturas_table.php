<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faturas', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('consumo_ponta');
            $table->float('consumo_fora_ponta');
            $table->float('consumo_total');
            $table->float('demanda_medida');
            $table->float('demanda_contratada');
            $table->float('custo');
            $table->float('geracao_mensal');
            $table->float('injetada_fp');
            $table->float('injetada_p');
            $table->float('saldo_mensal');
            $table->float('saldo_acumulado');
            $table->integer('uc_id')->unsigned();
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
        Schema::dropIfExists('faturas');
    }
}
