<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('productName');
            $table->string('productCode');
            $table->integer('categoryId');
            $table->integer('manufacturarId');
            $table->float('productPrice',10,2);
            $table->float('sproductPrice',10,2);
            $table->integer('productQuantity');
            $table->text('productInfo');
            $table->text('productImage');
            $table->tinyInteger('stockStatus');
            $table->tinyInteger('publicationStatus');
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
