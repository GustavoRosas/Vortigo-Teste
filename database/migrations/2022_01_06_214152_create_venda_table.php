<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->id('id_venda');
            $table->unsignedBigInteger('id_vendedor');
            $table->double('valor_venda');
            $table->double('vendedor_comissao');
            $table->date('data_venda')->default(date("Y-m-d"));
            $table->foreign('id_vendedor')->references('id_vendedor')->on('vendedor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda');
    }
}
