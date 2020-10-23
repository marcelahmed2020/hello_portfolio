<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default(0);
            $table->string('sub_title')->default(0);
            $table->longText('desc')->default(0);

            $table->integer('education_id')->unsigned();
            $table->string('locale')->index();
            $table->timestamps();
            $table->unique(['education_id', 'locale']);
            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_translations');
    }
}
