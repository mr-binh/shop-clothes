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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_variant_id')->foreign('product_variant_id')->references('id')->on('product_variants');
            $table->bigInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->integer('quantity');
            $table->integer('total_cost');
            $table->string('status');
            $table->string('payment_method');
            $table->string('payment_status');
//            $table->string('shipping_method');
//            $table->string('shipping_status');
            $table->string('shipping_address');
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
        Schema::dropIfExists('order');
    }
};
