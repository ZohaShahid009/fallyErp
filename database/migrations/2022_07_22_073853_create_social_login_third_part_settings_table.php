<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLoginThirdPartSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_login_third_part_settings', function (Blueprint $table) {
            $table->id();
            //facebook
            $table->integer('facebook_isActive')->nullable(true);
            $table->string('facebook_app_id')->nullable(true);
            $table->string('facebook_app_secret')->nullable(true);
            //google
            $table->integer('google_isActive')->nullable(true);
            $table->string('google_client_id')->nullable(true);
            $table->string('google_client_secret')->nullable(true);
            //LinkedIn
            $table->integer('linkedIn_isActive')->nullable(true);
            $table->string('linkedIn_client_id')->nullable(true);
            $table->string('linkedIn_client_secret')->nullable(true);
            //Twitter
            $table->integer('twitter_isActive')->nullable(true);
            $table->string('twitter_client_id')->nullable(true);
            $table->string('twitter_client_secret')->nullable(true);
             //Google Analytice
             $table->integer('gAnalytic_isActive')->nullable(true);
             $table->string('gAnalytic_tracking_id')->nullable(true);
             //Google reCAPTHA
             $table->integer('greCaptha_isActive')->nullable(true);
             $table->string('greCaptha_site_key')->nullable(true);
              //Facbook Chat
              $table->integer('facebook_chat_isActive')->nullable(true);
              $table->string('facebook_chat_id')->nullable(true);
               //Facbook Pixel
               $table->integer('facebook_pixel_isActive')->nullable(true);
               $table->string('facebook_pixel_id')->nullable(true);
                //Facbook Comment
              $table->integer('facebook_comment_isActive')->nullable(true);
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
        Schema::dropIfExists('social_login_third_part_settings');
    }
}
