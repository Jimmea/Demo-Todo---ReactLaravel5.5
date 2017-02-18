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
            $table->string('con_site_title')->nullable();
            $table->string('con_address')->nullable();
            $table->string('con_favicon')->nullable();
            $table->string('con_logo')->nullable();
            $table->string('con_background_img')->nullable();
            $table->string('con_background_color')->nullable();
            $table->string('con_meta_title')->nullable();
            $table->string('con_meta_keyword')->nullable();
            $table->string('con_meta_description')->nullable();
            $table->string('con_support_online')->nullable();
            $table->string('con_hotline')->nullable();
            $table->string('con_gmail')->nullable();
            $table->string('con_facebook')->nullable();
            $table->string('con_google')->nullable();
            $table->string('con_instagram')->nullable();
            $table->string('con_pinterest')->nullable();
            $table->string('con_code_analytics')->nullable();
            $table->string('con_code_facebook')->nullable();
            $table->string('con_code_param1')->nullable();
            $table->string('con_code_param2')->nullable();
            $table->string('con_code_param3')->nullable();
            $table->string('con_code_param4')->nullable();
            $table->string('con_code_param5')->nullable();
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
