<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default(0);
            $table->string('sub_title')->default(0);
            $table->longText('desc1')->default(0);
            $table->longText('desc2')->default(0);
            $table->longText('desc3')->default(0);

            $table->integer('experience_id')->unsigned();
            $table->string('locale')->index();
            $table->timestamps();
            $table->unique(['experience_id', 'locale']);
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_translations');
    }
}
