<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default(0);
             $table->integer('portfolios_id')->unsigned();
            $table->string('locale')->index();
            $table->timestamps();
            $table->unique(['portfolios_id', 'locale']);
            $table->foreign('portfolios_id')->references('id')->on('portfolios')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios_translations');
    }
}
