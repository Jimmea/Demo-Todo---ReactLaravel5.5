<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucHits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc_hits', function (Blueprint $table) {
            $table->integer('th_new_id')->unsigned();
            $table->integer('th_vote_count');
            $table->integer('th_user_vote_count');
            $table->integer('th_view_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tintuc_hits');
    }
}
