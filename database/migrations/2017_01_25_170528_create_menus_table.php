<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('mnu_id');
            $table->string('mnu_name');
            $table->string('mnu_picture')->nullable();
            $table->string('mnu_icon')->nullable();
            $table->string('mnu_link')->nullable();
            $table->enum('mnu_target', ['_self', '_blank', '_parent', '_top']);
            $table->tinyInteger('mnu_type')->nullable();
            $table->tinyInteger('mnu_position')->nullable();
            $table->tinyInteger('mnu_order')->default(0);
            $table->tinyInteger('mnu_parent_id')->default(0);
            $table->tinyInteger('mnu_has_child')->nullable();
            $table->tinyInteger('mnu_all_child')->nullable();
            $table->tinyInteger('mnu_status')->nullable();
            $table->tinyInteger('mnu_admin_id')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
