<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronJobSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cron_job_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('cronjob_isActive')->nullable(true);
            $table->integer('cronjob_type')->nullable(true);
            $table->string('cronjob_link')->nullable(true);
            $table->string('cronjob_last_run')->nullable(true);
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
        Schema::dropIfExists('cron_job_settings');
    }
}
