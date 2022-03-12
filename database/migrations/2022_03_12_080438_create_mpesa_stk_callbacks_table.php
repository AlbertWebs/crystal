<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaStkCallbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_stk_callbacks', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('MerchantRequestID', 191);
            $table->string('CheckoutRequestID', 191);
            $table->integer('ResultCode');
            $table->string('ResultDesc', 191);
            $table->double('Amount', 10, 2)->nullable();
            $table->string('MpesaReceiptNumber', 191)->nullable();
            $table->string('Balance', 191)->nullable();
            $table->string('TransactionDate', 191)->nullable();
            $table->string('PhoneNumber', 191)->nullable();
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
        Schema::dropIfExists('mpesa_stk_callbacks');
    }
}
