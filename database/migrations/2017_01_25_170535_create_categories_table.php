<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('cate_id');
            $table->string('cate_name');
            $table->string('cate_picture');
            $table->string('cate_background');
            $table->string('cate_title');
            $table->string('cate_description');
            $table->string('cate_seo_keyword');
            $table->string('cate_seo_title');
            $table->string('cate_seo_description');
            $table->tinyInteger('cate_status');
            $table->tinyInteger('cate_lang_id');
            $table->tinyInteger('cate_parent_id');
            $table->tinyInteger('cate_has_child');
            $table->tinyInteger('cate_all_child');
            $table->string('cate_type');
            $table->tinyInteger('cate_hot');
            $table->tinyInteger('cate_admin_id');
            $table->string('cat_show_mob');
            $table->tinyInteger('cat_show');
            $table->tinyInteger('cat_view_type');
            $table->string('cate_icon');
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
        Schema::dropIfExists('categories');
    }
}
