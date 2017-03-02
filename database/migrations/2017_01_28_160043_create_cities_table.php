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
            $table->string('cit_slug')->nullable();
            $table->string('cit_md5')->nullable();
            $table->tinyInteger('cit_parent_id')->nullable();
            $table->tinyInteger('cit_order')->nullable();
            $table->string('cit_short')->nullable();
            $table->string('cit_phone')->nullable();
            $table->string('cit_phone_reference')->nullable();
            $table->string('cit_map_longitude')->nullable();
            $table->string('cit_map_latitude')->nullable();
            $table->tinyInteger('cit_status')->nullable();
            $table->string('cit_cskh_ym')->nullable();
            $table->string('cit_cskh_phone')->nullable();
            $table->string('cit_free_transport')->nullable();
            $table->string('cit_param1')->nullable();
            $table->string('cit_param2')->nullable();
            $table->string('cit_param3')->nullable();
            $table->string('cit_param4')->nullable();
            $table->string('cit_param5')->nullable();
            $table->string('cit_param6')->nullable();
            $table->string('cit_param7')->nullable();
            $table->string('cit_param8')->nullable();
            $table->string('cit_param9')->nullable();
            $table->string('cit_param10')->nullable();
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
