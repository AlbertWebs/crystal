<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLnmoApiResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lnmo_api_response', function (Blueprint $table) {
            $table->integer('lnmoID');
            $table->string('MerchantRequestID')->nullable();
            $table->string('CheckoutRequestID')->nullable();
            $table->integer('user_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('Amount', 20)->nullable();
            $table->string('MpesaReceiptNumber', 20)->nullable();
            $table->string('TransactionDate', 20)->nullable();
            $table->string('PhoneNumber', 15)->nullable();
            $table->dateTime('updateTime')->useCurrent();
            $table->dateTime('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lnmo_api_response');
    }
}
