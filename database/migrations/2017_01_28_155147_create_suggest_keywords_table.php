<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggest_keywords', function (Blueprint $table) {
            $table->increments('suk_id');
            $table->string('suk_name');
            $table->string('suk_link');
            $table->string('suk_icon');
            $table->string('suk_color');
            $table->tinyInteger('suk_position');
            $table->tinyInteger('suk_order');
            $table->tinyInteger('suk_status');
            $table->enum('suk_target', ['_self', '_blank', '_top', '_parent']);
            $table->tinyInteger('suk_admin_id');
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
        Schema::dropIfExists('suggest_keywords');
    }
}
