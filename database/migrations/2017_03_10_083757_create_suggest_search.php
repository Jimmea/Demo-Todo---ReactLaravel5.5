<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggest_searchs', function (Blueprint $table) {
            $table->increments('sus_id');
            $table->string('sus_name');
            $table->string('sus_link')->nullable();
            $table->string('sus_color')->nullable();
            $table->integer('sus_order')->default(0);
            $table->integer('sus_status')->default(0);
            $table->integer('sus_action')->default(1);
            $table->integer('sus_admin_id')->nullable(0);
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
        Schema::dropIfExists('suggest_searchs');
    }
}
