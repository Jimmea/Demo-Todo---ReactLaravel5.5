<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('cit_id');
            $table->string('cit_name');
            $table->string('cit_slug');
            $table->string('cit_md5');
            $table->tinyInteger('cit_parent_id');
            $table->tinyInteger('cit_order');
            $table->string('cit_short');
            $table->string('cit_phone');
            $table->string('cit_phone_reference');
            $table->string('cit_map_longitude');
            $table->string('cit_map_latitude');
            $table->tinyInteger('cit_status');
            $table->string('cit_cskh_ym');
            $table->string('cit_cskh_phone');
            $table->string('cit_free_transport');
            $table->string('cit_param1');
            $table->string('cit_param2');
            $table->string('cit_param3');
            $table->string('cit_param4');
            $table->string('cit_param5');
            $table->string('cit_param6');
            $table->string('cit_param7');
            $table->string('cit_param8');
            $table->string('cit_param9');
            $table->string('cit_param10');
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
        Schema::dropIfExists('cities');
    }
}
