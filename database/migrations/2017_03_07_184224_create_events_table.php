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
            $table->string('evn_slug')->nullable();
            $table->string('evn_picture');
            $table->integer('evn_order')->default(0);
            $table->integer('evn_admin_id');
            $table->integer('evn_status')->default(0);
            $table->string('evn_meta_title');
            $table->text('evn_meta_keyword');
            $table->text('evn_meta_description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('event_new_categories', function (Blueprint $table)
        {
            $table->increments('enc_id');
            $table->string('enc_evn_id')->index();
            $table->string('enc_category_id')->index();
        });

        Schema::create('event_new_category_users', function (Blueprint $table)
        {
            $table->integer('encu_new_id')->index();
            $table->integer('encu_evn_id')->index();
            $table->integer('encu_category_id')->index();
            $table->integer('encu_order')->default(0);
            $table->integer('encu_admin_id');
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
        Schema::dropIfExists('event_new_category_users');
        Schema::dropIfExists('event_new_categories');
        Schema::dropIfExists('events');
    }
}
