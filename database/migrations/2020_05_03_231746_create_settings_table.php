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
            $table->increments('id');
            $table->string('phone1')->default(0);
            $table->string('facebook')->default(0);
            $table->tinyInteger('facebook_status')->default(1);
            $table->string('twitter')->default(0);
            $table->tinyInteger('twitter_status')->default(1);
            $table->string('instagram')->default(0);
            $table->tinyInteger('instagram_status')->default(1);
            $table->string('linkedin')->default(0);
            $table->tinyInteger('linkedin_status')->default(1);
            $table->string('vk')->default(0);
            $table->tinyInteger('vk_status')->default(1);
            $table->string('telegram')->default(0);
            $table->tinyInteger('telegram_status')->default(1);
            $table->string('whatsapp')->default(0);
            $table->tinyInteger('whatsapp_status')->default(1);
            $table->string('logo');
            $table->string('date');
            $table->string('email')->nullable;
            $table->integer('closed')->default(0);
            $table->integer('edit')->default(0);

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
