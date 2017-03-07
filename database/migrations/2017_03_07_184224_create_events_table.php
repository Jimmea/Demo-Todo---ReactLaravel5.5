<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('evn_id');
            $table->string('evn_name');
            $table->string('evn_teaser')->nullable();
            $table->timestamps();
        });

        Schema::create('event_categories', function (Blueprint $table)
        {
            $table->increments('evc_id');
            $table->string('evc_evn_id')->index();
            $table->string('evc_category_id')->index();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_categories');
        Schema::dropIfExists('events');
    }
}
