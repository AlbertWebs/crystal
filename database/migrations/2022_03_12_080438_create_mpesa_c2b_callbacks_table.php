<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaC2bCallbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_c2b_callbacks', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('TransactionType', 191);
            $table->string('TransID', 191);
            $table->string('TransTime', 191);
            $table->double('TransAmount', 10, 2);
            $table->integer('BusinessShortCode');
            $table->string('BillRefNumber', 191);
            $table->string('InvoiceNumber', 191)->nullable();
            $table->string('ThirdPartyTransID', 191)->nullable();
            $table->double('OrgAccountBalance', 10, 2);
            $table->string('MSISDN', 191);
            $table->string('FirstName', 191)->nullable();
            $table->string('MiddleName', 191)->nullable();
            $table->string('LastName', 191)->nullable();
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
        Schema::dropIfExists('mpesa_c2b_callbacks');
    }
}
