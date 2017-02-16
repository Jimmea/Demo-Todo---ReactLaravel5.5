<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_pictures', function (Blueprint $table) {
            $table->increments('nep_id');
            $table->integer('nep_new_id')->unsigned()->index();
            $table->string('nep_picture');
            $table->string('nep_note');
            $table->string('nep_description');
            $table->tinyInteger('nep_main_picture');
            $table->tinyInteger('nep_version'); // mobile and desktop
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
        Schema::dropIfExists('new_pictures');
    }
}
