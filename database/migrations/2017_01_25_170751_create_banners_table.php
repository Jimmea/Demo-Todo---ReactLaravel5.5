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
            $table->string('ban_picture');
            $table->string('ban_link');
            $table->string('ban_title');
            $table->string('ban_description');
            $table->enum('ban_target', ['_self','_blank', '_parent', '_top']);
            $table->tinyInteger('ban_type');
            $table->tinyInteger('ban_position');
            $table->tinyInteger('ban_start_date');
            $table->tinyInteger('ban_end_date');
            $table->tinyInteger('ban_order');
            $table->tinyInteger('ban_status');
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
        Schema::dropIfExists('banners');
    }
}
