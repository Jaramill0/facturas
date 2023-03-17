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
        Schema::create('facturas_items', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->foreignId('factura_id')->references('id')->on('facturas')->unsigned();
            $table->foreignId('articulo_id')->references('id')->on('articulos')->unsigned();
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
        Schema::dropIfExists('facturas_items');
    }
};
