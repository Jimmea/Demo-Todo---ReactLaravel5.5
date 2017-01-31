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
            $table->string('con_meta_description');
            $table->string('con_meta_keyword');
            $table->string('con_support_online');
            $table->string('con_list_currency');
            $table->string('con_gmail_name');
            $table->string('con_gmail_pass');
            $table->string('con_background_img');
            $table->string('con_background_color');
            $table->string('con_address');
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
