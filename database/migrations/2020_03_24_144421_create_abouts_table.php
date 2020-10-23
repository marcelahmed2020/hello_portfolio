<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default('Web Developer');
            $table->string('sub_title')->default(0);
            $table->string('freelance')->default('Available');
            $table->string('degree')->default('Bachelor');
            
            $table->string('image')->default(0);
            $table->string('birthday')->default('1 January 1996');
            $table->string('age')->default(0);
            $table->string('phone')->default(0);
            $table->string('website')->default('https://');
            $table->text('desc')->default(0);
            $table->integer('one')->default(0);
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
        Schema::dropIfExists('abouts');
    }
}
