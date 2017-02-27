<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_events', function (Blueprint $table) {
            $table->increments('bne_id');
            $table->integer('bne_banner_id')->index();
            $table->integer('bne_new_id')->index();
            $table->integer('ban_category_id')->index();
            $table->timestamps();
        });

        Schema::create('banner_data_click', function (Blueprint $table) {
            $table->increments('bdc_banner_id');
            $table->integer('bdc_click')->index();
            $table->integer('bdc_last_ip')->index();
            $table->integer('bdc_last_update')->index();
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
        Schema::dropIfExists('banner_events');
    }
}
