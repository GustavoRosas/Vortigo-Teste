<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedor', function (Blueprint $table) {
            $table->id('id_vendedor');
            $table->string('nome', 30);
            $table->string('email', 50);
            $table->decimal('comissao',5,3)->default(0.065);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendedor');
    }
}
