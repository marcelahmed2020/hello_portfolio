<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default(0);
            $table->string('sub_title')->default(0);
            $table->string('from')->default(0);
            $table->string('to')->default(0);
            $table->string('desc')->default(0);
            $table->string('desc2')->default(0);
            $table->string('desc3')->default(0);
            $table->string('desc4')->default(0);
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
        Schema::dropIfExists('professional_experiences');
    }
}
