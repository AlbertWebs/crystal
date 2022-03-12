<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaBulkPaymentResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_bulk_payment_responses', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->smallInteger('ResultType');
            $table->smallInteger('ResultCode');
            $table->string('ResultDesc', 191);
            $table->string('OriginatorConversationID', 191);
            $table->string('ConversationID', 191);
            $table->string('TransactionID', 191);
            $table->longText('ResultParameters')->nullable();
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
        Schema::dropIfExists('mpesa_bulk_payment_responses');
    }
}
