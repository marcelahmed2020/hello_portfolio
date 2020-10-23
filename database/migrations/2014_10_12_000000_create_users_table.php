<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('min_image')->default(0);
            $table->string('max_image')->default(0);
//            $table->string('birth')->default(0);
//            $table->string('country')->default(0);
//            $table->string('city')->default(0);
//            $table->string('address')->default(0);
//            $table->string('phone')->default(0);
            $table->integer('enabled')->default(1);
            $table->integer('status')->default(1);
            $table->integer('admin')->default(0);
            $table->integer('edit')->default(0);
            $table->integer('delete')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
