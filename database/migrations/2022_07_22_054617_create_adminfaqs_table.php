<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminfaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminfaqs', function (Blueprint $table) {
            $table->id();
            $table->string('Category_id')->nullable(true);
            $table->string('Tittle')->nullable(true);
            $table->string('Discrption')->nullable(true);
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
        Schema::dropIfExists('adminfaqs');
    }
}
