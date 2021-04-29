<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_has_products', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('orders_id');
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_has_products');
    }
}
