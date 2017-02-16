<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statics', function (Blueprint $table) {
            $table->increments('sta_id');
            $table->integer('sta_category_id')->unsigned()->index();
            $table->string('sta_title');
            $table->tinyInteger('sta_order');
            $table->text('sta_description');
            $table->string('sta_new');
            $table->string('sta_status');
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
        Schema::dropIfExists('statics');
    }
}
