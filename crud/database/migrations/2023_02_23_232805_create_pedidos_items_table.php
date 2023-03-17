<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_items', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->foreignId('pedido_id')->unsigned()->references('id')->on('pedidos')->unsigned();
            $table->foreignId('articulo_id')->unsigned()->references('id')->on('articulos')->unsigned();
            $table->integer('cantidad')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_items');
    }
};
