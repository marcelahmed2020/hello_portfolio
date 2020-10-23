<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('Web Developer');
            $table->string('sub_title')->default(0);
            $table->string('freelance')->default('Available');
            $table->string('degree')->default('Bachelor');
            $table->text('desc')->default(0);
            $table->string('address')->default(0);
            $table->integer('about_id')->unsigned();
            $table->string('locale')->index();
            $table->timestamps();
            $table->unique(['about_id', 'locale']);
            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_translations');
    }
}
