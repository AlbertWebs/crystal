<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaStkRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_stk_requests', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('phone', 191);
            $table->double('amount', 10, 2);
            $table->string('reference', 191);
            $table->string('description', 191);
            $table->string('status', 191)->default('Requested');
            $table->boolean('complete')->default(true);
            $table->string('MerchantRequestID', 191);
            $table->string('CheckoutRequestID', 191);
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
        Schema::dropIfExists('mpesa_stk_requests');
    }
}
