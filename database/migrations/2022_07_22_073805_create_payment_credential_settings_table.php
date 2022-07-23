<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentCredentialSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_credential_settings', function (Blueprint $table) {
            $table->id();
            //paypal
            $table->integer('paypal_isActive')->nullable(true);
            $table->string('paypal_client_id')->nullable(true);
            $table->string('paypal_client_secret')->nullable(true);
            $table->integer('paypal_sandbox')->nullable(true);

            //stripe
            $table->integer('stripe_isActive')->nullable(true);
            $table->string('stripe_api_key')->nullable(true);
            $table->string('stripe_secret_key')->nullable(true);
            $table->integer('stripe_sandbox')->nullable(true);

            //SSLcommerz Configuration
            $table->integer('sslcz_isActive')->nullable(true);
            $table->string('sslcz_store_id')->nullable(true);
            $table->string('sslcz_store_password')->nullable(true);
            $table->integer('sslcz_sandbox')->nullable(true);

            //PayStack Configuration
            $table->integer('paystack_isActive')->nullable(true);
            $table->string('paystack_public_key')->nullable(true);
            $table->string('paystack_secret_key')->nullable(true);
            $table->integer('paystack_merchant_key')->nullable(true);
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
        Schema::dropIfExists('payment_credential_settings');
    }
}
