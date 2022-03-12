<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('cat', 191);
            $table->text('keywords')->nullable();
            $table->string('slung')->nullable();
            $table->integer('home');
            $table->string('image', 191)->nullable();
            $table->text('description')->nullable();
            $table->string('col', 11)->default('0');
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
        Schema::dropIfExists('category');
    }
}
