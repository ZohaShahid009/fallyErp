<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable(true);
            $table->string('type')->nullable(true);
            $table->string('from')->nullable(true);
            $table->string('queue')->nullable(true);
            $table->string('owner')->nullable(true);
            $table->string('project')->nullable(true);
            $table->string('client_name')->nullable(true);
            $table->string('clent_id')->nullable(true);
            $table->string('client_company')->nullable(true);
            $table->string('subject')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('reply')->nullable(true);
            $table->string('last_reply')->nullable(true);
            $table->string('notes')->nullable(true);
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
        Schema::dropIfExists('support_tickets');
    }
}
