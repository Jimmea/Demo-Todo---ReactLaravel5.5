<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('mod_id');
            $table->string('mod_name');
            $table->string('mod_path')->nullable();
            $table->string('mod_listname')->nullable();
            $table->string('mod_listrouter')->nullable();
            $table->tinyInteger('mod_order')->default(0);
            $table->string('mod_icon')->nullable();
            $table->string('mod_help')->nullable();
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
        Schema::dropIfExists('modules');
    }
}
