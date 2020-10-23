<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default(0);
            $table->string('sub_title')->default(0);
            $table->string('desc1')->default(0);
            $table->string('desc2')->default(0);
            $table->string('desc3')->default(0);
            $table->string('footer_desc')->default(0);
            $table->integer('price_id')->unsigned();
            $table->string('locale')->index();
            $table->timestamps();
            $table->unique(['price_id', 'locale']);
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_translations');
    }
}
