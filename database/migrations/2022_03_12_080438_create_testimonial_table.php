<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name', 191)->nullable();
            $table->string('company', 191)->nullable();
            $table->string('position', 191)->nullable();
            $table->string('image', 191)->nullable();
            $table->string('service', 191)->nullable();
            $table->text('content')->nullable();
            $table->string('rating', 191)->nullable();
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
        Schema::dropIfExists('testimonial');
    }
}
