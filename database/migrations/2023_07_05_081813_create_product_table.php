<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNull();
            $table->string('slug');
            $table->string('description');
            $table->string('image');
            $table->integer('price')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('hot')->default(1);
            $table->integer('sold')->default(0);
            $table->integer('category_id')->default(0);
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
        Schema::dropIfExists('product');
    }
};
