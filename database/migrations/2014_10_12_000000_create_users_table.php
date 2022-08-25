<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('first_Name')->nullable(true);
            $table->string('Last_name')->nullable(true);
            $table->string('Phone_Number')->nullable(true);
            $table->string('User_Type')->nullable(true);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(true);
            $table->string('password');
            $table->string('linkedin_id')->nullable(true);
            $table->string('facebook_id')->nullable(true);
            $table->string('google_id')->nullable(true);
            $table->string('profile_image')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
