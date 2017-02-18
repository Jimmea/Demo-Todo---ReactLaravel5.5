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
            $table->string('cate_name')->nullable();
            $table->string('cate_picture')->nullable();
            $table->string('cate_background')->nullable();
            $table->string('cate_meta_keyword')->nullable();
            $table->string('cate_meta_title')->nullable();
            $table->string('cate_meta_description')->nullable();
            $table->tinyInteger('cate_status')->default(1);
            $table->tinyInteger('cate_order')->default(0);
            $table->tinyInteger('cate_parent_id')->default(0);
            $table->tinyInteger('cate_has_child')->nullable();
            $table->integer('cate_total_hit')->default(0);
            $table->string('cate_all_child')->nullable();
            $table->string('cate_type')->nullable();
            $table->tinyInteger('cate_hot')->nullable();
            $table->tinyInteger('cate_admin_id')->nullable();
            $table->tinyInteger('cate_show')->nullable();
            $table->tinyInteger('cate_view_type')->default(1);
            $table->string('cate_icon')->nullable();
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
