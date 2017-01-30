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
        Schema::create('banner_categories', function (Blueprint $table) {
            $table->increments('bac_id');
            $table->integer('bac_category_id')->unsigned()->index();
            $table->string('bac_picture');
            $table->string('bac_link');
            $table->string('bac_title');
            $table->string('bac_description');
            $table->enum('bac_target', ['_self','_blank', '_parent', '_top']);
            $table->tinyInteger('bac_type');
            $table->tinyInteger('bac_position');
            $table->tinyInteger('bac_start_date');
            $table->tinyInteger('bac_end_date');
            $table->tinyInteger('bac_order');
            $table->tinyInteger('bac_status');
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
        Schema::dropIfExists('banner_categories');
    }
}
