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
            $table->string('order_code');
            $table->bigInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->text('note')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('total');
            $table->integer('status');
            $table->string('payment_method');
            $table->boolean('payment_status');
            $table->string('shipping_address');
            $table->timestamps();
            $table->softDeletes();
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
