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
            $table->string('ban_picture')->nullale();
            $table->string('ban_link')->nullale();
            $table->tinyInteger('ban_isevent')->default(0);
            $table->string('ban_title');
            $table->string('ban_description')->nullale();
            $table->enum('ban_target', ['_self','_blank', '_parent', '_top'])->nullale();
            $table->tinyInteger('ban_type')->default(0);
            $table->tinyInteger('ban_position')->default(0);
            $table->tinyInteger('ban_start_date')->default(0);
            $table->tinyInteger('ban_end_date')->default(0);
            $table->tinyInteger('ban_order')->default(0);
            $table->tinyInteger('ban_status')->default(0);
            $table->integer('ban_admin_id')->default(1)->index();
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
