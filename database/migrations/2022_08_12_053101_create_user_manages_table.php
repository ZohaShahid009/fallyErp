<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_manages', function (Blueprint $table) {
            $table->id();
            $table->string('first_Name')->nullable(true);
            $table->string('Last_name')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('password')->default(12345);
            $table->string('Phone_Number')->nullable(true);
            $table->string('User_Type')->nullable(true);
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
        Schema::dropIfExists('user_manages');
    }
}
