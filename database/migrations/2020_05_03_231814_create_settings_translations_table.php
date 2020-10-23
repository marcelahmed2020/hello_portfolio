<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('adress');
            $table->longtext('description')->nullable;
            $table->longtext('keywords')->nullable;
            $table->longtext('message_maintenance')->nullable;
            $table->string('head_office');
            $table->integer('settings_id')->unsigned();
            $table->string('locale')->index();
            $table->timestamps();
            $table->unique(['settings_id', 'locale']);
            $table->foreign('settings_id')->references('id')->on('settings')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_translations');
    }
}
