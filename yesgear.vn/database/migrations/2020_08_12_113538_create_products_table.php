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
            $table->id();
            $table->string('name',100);
            $table->string('thumbnail',200);
            $table->string('brand_code',10);
            $table->string('category_code',10);
            $table->string('image_url',300);
            $table->text('describe');
            $table->text('tech_info')->nullable();
            $table->integer('price');
            $table->smallInteger('quantity');
            $table->timestamps();

            $table->foreign('brand_code')->references('code')->on('brands');
            $table->foreign('category_code')->references('code')->on('categories');
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
