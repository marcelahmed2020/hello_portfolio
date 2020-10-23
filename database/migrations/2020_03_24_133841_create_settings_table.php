<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name')->default('Dev Marcel');
            $table->string('adress')->default('Cairo, Egypt');
            $table->string('facebook');
            $table->tinyInteger('facebook_status')->default(1);
            $table->string('twitter');
            $table->tinyInteger('twitter_status')->default(1);
            $table->string('instagram');
            $table->tinyInteger('instagram_status')->default(1);
            $table->string('linkedin');
            $table->tinyInteger('linkedin_status')->default(1);
            $table->string('email')->nullable;
            $table->longtext('description')->nullable;
            $table->longtext('keywords')->nullable;
            $table->boolean('status')->default(false);
            $table->longtext('message_maintenance')->nullable;
            $table->string('latitude')->default(0);
            $table->string('longitude')->default(0);
            $table->string('logo');
            $table->string('date');
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
        Schema::dropIfExists('settings');
    }
}
