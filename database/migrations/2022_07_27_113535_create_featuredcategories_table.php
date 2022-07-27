<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featuredcategories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(true);
            $table->longText('subtitle')->nullable(true);
            $table->string('category')->nullable(true);
            $table->string('leftbanner')->nullable(true);
            $table->string('rightbanner')->nullable(true);
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
        Schema::dropIfExists('featuredcategories');
    }
}
