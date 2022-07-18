<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(true);
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('hourly_rate')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('facebook_url')->nullable(true);
            $table->string('linkedin_url')->nullable(true);
            $table->string('skype_url')->nullable(true);
            $table->string('language_id')->nullable(true);
            $table->longText('email_signature')->nullable(true);
            $table->string('diraction_id')->nullable(true);
            $table->string('department_id')->nullable(true);
            $table->string('is_administrator')->nullable(true);
            $table->string('password');
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
        Schema::dropIfExists('staff');
    }
}
