<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTabActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('category_tab_actions', function (Blueprint $table) {
                $table->increments('cta_id');
                $table->integer('cta_tabaction_id')->index();
                $table->integer('cta_status')->default(1);
                $table->integer('cta_category_id')->index();
                $table->string('cta_group_category_id');
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
        Schema::dropIfExists('category_tab_actions');
    }
}
