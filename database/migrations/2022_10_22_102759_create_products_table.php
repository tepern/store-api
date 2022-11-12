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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SKU');
            $table->string('name');
            $table->string('price');
            $table->string('old_price');
            $table->string('discount');
            $table->text('description');
            $table->string('vendor');
            $table->string('type');
            $table->string('barcode');
            $table->string('weight');
            $table->string('tags');
            $table->string('collections');
            $table->string('img');
            $table->string('images');
            $table->string('reviews')->default([]);
            $table->SoftDeletes();
            $table->boolean('bestseller')->default(true);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('products');
    }
};
