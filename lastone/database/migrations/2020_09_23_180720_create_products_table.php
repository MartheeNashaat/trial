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
            $table->decimal('price',8,2);
            $table->decimal('sale_price',8 ,2);
            $table->text('description');
            $table->integer('stock');
            $table->foreignId('brand_id');
            $table->foreignId('category_id');
            $table->string('color');
            $table->string('name');
            $table->foreignId('img_id');
            $table->string('size');
            
            
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
}
