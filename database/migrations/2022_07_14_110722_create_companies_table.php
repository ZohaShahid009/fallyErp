<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable(true);
            $table->string('primary_contact')->nullable(true);
            $table->string('company_email');
            $table->string('website_url')->nullable(true);
            $table->string('company_phone')->nullable(true);
            $table->string('vat_number')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('zip_code')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('state')->nullable(true);
            $table->string('facebook_url')->nullable(true);
            $table->string('twitter_url')->nullable(true);
            $table->string('skype_url')->nullable(true);
            $table->string('linkedin_url')->nullable(true);
            $table->string('instagram_url')->nullable(true);
            $table->string('youtube_url')->nullable(true);
            $table->string('googleplus_url')->nullable(true);
            $table->string('Pinterest_url')->nullable(true);
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
        Schema::dropIfExists('companies');
    }
}
