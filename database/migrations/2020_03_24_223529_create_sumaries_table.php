<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default(0);
            $table->string('title')->default(0);
            $table->string('desc')->default(0);
            $table->string('adress')->default(0);
            $table->string('phone')->default(0);
            $table->string('email')->default(0);
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
        Schema::dropIfExists('sumaries');
    }
}
