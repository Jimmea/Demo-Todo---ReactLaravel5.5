<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('use_id');
            $table->string('use_name');
            $table->string('use_email')->unique();
            $table->string('use_password');
            $table->string('use_first_name');
            $table->string('use_last_name');
            $table->string('use_birthday');
            $table->string('use_gender');
            $table->string('use_city_id');
            $table->string('use_phone');
            $table->string('use_picture');
            $table->string('use_title');
            $table->string('use_description');
            $table->string('use_banner');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_socials', function (Blueprint $table) {
            $table->increments('uss_id');
            $table->string('uss_user_id')->unsigned()->index();
            $table->string('uss_provider_id');
            $table->string('uss_provider');
            $table->timestamps();
        });

        Schema::create('user_follows', function (Blueprint $table) {
            $table->increments('usf_id');
            $table->integer('uss_user_id')->unsigned()->index();
            $table->integer('usf_user_id_follow')->unsigned()->index();
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
        Schema::dropIfExists('user_socials');
        Schema::dropIfExists('user_follows');
    }
}
