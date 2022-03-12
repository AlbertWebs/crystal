<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name', 191)->nullable();
            $table->string('title')->nullable();
            $table->string('email', 191)->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
            $table->integer('rating')->nullable();
            $table->integer('liked')->nullable();
            $table->integer('unlike')->nullable();
            $table->string('product_id', 191)->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
