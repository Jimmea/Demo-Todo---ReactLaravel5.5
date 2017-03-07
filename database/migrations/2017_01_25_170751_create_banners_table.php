<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('ban_id');
            $table->string('ban_title');
            $table->string('ban_link')->nullale();
            $table->string('ban_picture')->nullale();
            $table->enum('ban_target', ['_self','_blank', '_parent', '_top'])->nullale();
            $table->tinyInteger('ban_position')->default(0);
            $table->tinyInteger('ban_type')->default(0);
            $table->tinyInteger('ban_order')->default(0);
            $table->tinyInteger('ban_status')->default(0);
            $table->tinyInteger('ban_start_date')->default(0);
            $table->tinyInteger('ban_end_date')->default(0);
            $table->string('ban_description')->nullale();
            $table->tinyInteger('ban_isevent')->default(0);
            $table->integer('ban_admin_id')->default(1)->index();
            $table->timestamps();
        });

        Schema::create('banner_data_click', function (Blueprint $table) {
            $table->increments('bdc_banner_id');
            $table->integer('bdc_click')->index();
            $table->integer('bdc_last_ip')->index();
            $table->integer('bdc_last_update')->index();
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
        Schema::dropIfExists('banner_data_click');
        Schema::dropIfExists('banners');
    }
}
