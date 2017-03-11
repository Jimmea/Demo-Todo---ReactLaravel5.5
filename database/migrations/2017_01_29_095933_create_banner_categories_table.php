<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_banners', function (Blueprint $table) {
            $table->increments('cab_id');
            $table->integer('cab_category_id')->unsigned()->index();
            $table->string('cab_picture');
            $table->string('cab_link');
            $table->string('cab_title');
            $table->string('cab_description')->nullable();
            $table->enum('cab_target', ['_self','_blank', '_parent', '_top']);
            $table->tinyInteger('cab_type')->nullable();
            $table->tinyInteger('cab_position')->nullable();
            $table->date('cab_start_date')->nullable();
            $table->date('cab_end_date')->nullable();
            $table->tinyInteger('cab_order')->nullable();
            $table->tinyInteger('cab_status')->default(0);
            $table->integer('cab_admin_id')->index();
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
        Schema::dropIfExists('category_banners');
    }
}
