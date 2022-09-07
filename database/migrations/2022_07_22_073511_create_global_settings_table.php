<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_settings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('email_address')->nullable(true);
            $table->integer('phone_number')->nullable(true);
            $table->string('company_name')->nullable(true);
            $table->string('company_contact')->nullable(true);
            $table->string('industry')->nullable(true);
            $table->string('company_size')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('company_email')->nullable(true);
            $table->string('company_address')->nullable(true);
            $table->string('company_city')->nullable(true);
            $table->string('company_domain')->nullable(true);
            $table->string('currency_position')->nullable(true);
            $table->string('invoice_detail')->nullable(true);
            $table->integer('tax')->nullable(true);
            $table->integer('second_tax')->nullable(true);
            $table->integer('vat_number')->nullable(true);
            $table->integer('default_currency')->nullable(true);
            $table->string('date_formate')->nullable(true);
            $table->string('time_formate')->nullable(true);
            $table->string('timezone')->nullable(true);
            $table->string('money_formate')->nullable(true);
            $table->string('company_logo')->nullable(true);
            $table->string('footer_logo')->nullable(true);
            $table->string('auth_logo')->nullable(true);
            $table->string('admin_logo')->nullable(true);
            $table->string('invoice_logo')->nullable(true);
            $table->longText('signed')->nullable(true);
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
        Schema::dropIfExists('global_settings');
    }
}
