<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('con_id');
            $table->string('con_admin_id');
            $table->string('con_site_title');
            $table->string('con_address');
            $table->string('con_favicon');
            $table->string('con_logo');
            $table->string('con_background_img');
            $table->string('con_background_color');
            $table->string('con_meta_title');
            $table->string('con_meta_keyword');
            $table->string('con_meta_description');
            $table->string('con_support_online');
            $table->string('con_hotline');
            $table->string('con_gmail');
            $table->string('con_facebook');
            $table->string('con_google');
            $table->string('con_instagram');
            $table->string('con_pinterest');
            $table->string('con_code_ga');
            $table->string('con_code_chat');
            $table->string('con_code_param1');
            $table->string('con_code_param2');
            $table->string('con_code_param3');
            $table->string('con_code_param4');
            $table->string('con_code_param5');
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
        Schema::dropIfExists('configurations');
    }
}
