<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default(0);
            $table->string('desc')->default(0);
            $table->integer('services_id')->unsigned();
            $table->string('locale')->index();
            $table->timestamps();
            $table->unique(['services_id', 'locale']);
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_translations');
    }
}
