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
            $table->integer('category_id');
            $table->string('tittle')->nullable(true);
            $table->string('cost')->nullable(true);
            $table->string('sale_price')->nullable(true);
            $table->string('unit_price');
            $table->string('purchase_price')->nullable(true);
            $table->string('unit')->nullable(true);
            $table->text('discrption')->nullable(true);
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
