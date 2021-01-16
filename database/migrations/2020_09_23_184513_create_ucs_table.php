<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tarifa');
            $table->float('jan');
            $table->float('fev');
            $table->float('mar');
            $table->float('abr');
            $table->float('mai');
            $table->float('jun');
            $table->float('jul');
            $table->float('ago');
            $table->float('set');
            $table->float('out');
            $table->float('nov');
            $table->float('dez');
            $table->integer('unidade_id')->unsigned();
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
        Schema::dropIfExists('ucs');
    }
}
