<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_settings', function (Blueprint $table) {
            $table->id();
            $table->string('smtp_protocol')->nullable(true);
            $table->string('smtp_host')->nullable(true);
            $table->string('smtp_username')->nullable(true);
            $table->string('smtp_password')->nullable(true);
            $table->integer('smtp_port')->nullable(true);
            $table->string('smtp_security')->nullable(true);
            $table->integer('connection_timeout')->nullable(true);
            $table->integer('debug_mode')->nullable(true);
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
        Schema::dropIfExists('email_settings');
    }
}
