<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name');
            $table->string('slug');
            $table->string('tag');
            $table->integer('quantity');
            $table->integer('sold');
            $table->integer('price');
            $table->integer('discount');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('image');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('categories');
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
}
