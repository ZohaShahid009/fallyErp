<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->string('client_id');
            $table->string('invoice_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('balance')->default('0');
            $table->string('due_date')->nullable();
            $table->string('deposit_amount')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->longText('private_notes')->nullable();
            $table->string('status')->default('0');
            //<--- Status Details --->\\
            // status = 0 is Draft.
            // status = 1 is Sent.
            // status = 2 is Not paid.
            // status = 3 is partially paid.
            // status = 4 is fully paid.
            // status = 5 is over due.
            // status = 6 is Paid late.
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
        Schema::dropIfExists('invoices');
    }
}
