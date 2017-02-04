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
            $table->string('mnu_picture');
            $table->string('mnu_link');
            $table->enum('mnu_target', ['_self', '_blank', '_parent', '_top']);
            $table->tinyInteger('mnu_type');
            $table->tinyInteger('mnu_position');
            $table->tinyInteger('mnu_order');
            $table->tinyInteger('mnu_parent_id');
            $table->tinyInteger('mnu_has_child');
            $table->string('mnu_defined');
            $table->tinyInteger('mnu_status');
            $table->tinyInteger('mnu_admin_id');
            $table->string('mnu_icon');
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
