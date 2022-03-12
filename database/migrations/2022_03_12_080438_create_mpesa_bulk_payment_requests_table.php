<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaBulkPaymentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_bulk_payment_requests', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('conversation_id', 191);
            $table->string('originator_conversation_id', 191);
            $table->double('amount', 10, 2);
            $table->string('phone', 20);
            $table->string('remarks', 191)->nullable();
            $table->string('CommandID', 191)->default('BusinessPayment');
            $table->unsignedInteger('user_id')->nullable();
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
        Schema::dropIfExists('mpesa_bulk_payment_requests');
    }
}
