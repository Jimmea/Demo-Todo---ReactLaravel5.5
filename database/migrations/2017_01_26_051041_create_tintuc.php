<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintucs', function (Blueprint $table) {
            $table->increments('new_id');
            $table->string('new_title');
            $table->string('new_slug')->index();
            $table->string('new_more_slug')->nullable();
            $table->string('new_title_md5')->unique();
            $table->integer('new_domain_id')->index();
            $table->string('new_link_from_domain')->nullable();
            $table->string('new_picture')->nullable();
            $table->integer('new_cate_id')->index();
            $table->string('new_description')->nullable();
            $table->integer('new_top')->nullable();
            $table->integer('new_hot')->nullable();
            $table->integer('new_status')->nullable();
            $table->integer('new_order')->nullable();
            $table->tinyInteger('new_type')->default(1); // crawl 0; // ng dung dang bai 1 // bosuutap 3
            $table->integer('new_admin_id')->index();
            $table->integer('new_pre_time')->default(0);
            $table->integer('new_cook_time')->default(0);
            $table->integer('new_people')->default(0);
            $table->string('new_param1')->nullable();
            $table->string('new_param2')->nullable();
            $table->string('new_param3')->nullable();
            $table->string('new_param4')->nullable();
            $table->string('new_param5')->nullable();
            $table->string('new_param6')->nullable();
            $table->string('new_param7')->nullable();
            $table->string('new_param8')->nullable();
            $table->string('new_param9')->nullable();
            $table->string('new_param10')->nullable();
            $table->string('new_param11')->nullable();
            $table->string('new_param12')->nullable();
            $table->string('new_param13')->nullable();
            $table->string('new_param14')->nullable();
            $table->string('new_param15')->nullable();
            $table->integer('new_deleted_at')->default(0);
            $table->timestamps();
        });

        for ($i=1; $i<=20; $i++)
        {
            Schema::create('new_content_'.$i, function (Blueprint $table) {
                $table->integer('nec_id')->unsigned()->index();
                $table->string('nec_video')->nullable();
                $table->text('nec_content')->nullable();
                $table->string('nec_seo_title')->nullable();
                $table->string('nec_seo_keyword')->nullable();
                $table->text('nec_seo_description')->nullable();
                $table->string('nec_seo_metah1')->nullable();
                $table->text('nec_collection_recipes')->nullable(); // bo suu tap cong thuc
                $table->text('nec_collection_address')->nullable(); // bo suu tap dia diem an uong
                $table->text('nec_ingredients')->nullable();
                $table->text('nec_directions')->nullable();
            });
        }

        Schema::create('new_fastfoods', function (Blueprint $table) {
           $table->integer('nef_new_id')->unsigned()->unique()->index();
           $table->integer('nef_price');
           $table->integer('nef_price_ship');
           $table->string('nef_param1');
           $table->string('nef_param2');
           $table->string('nef_param3');
           $table->string('nef_param4');
           $table->string('nef_param5');
           $table->string('nef_param6');
           $table->string('nef_param7');
           $table->string('nef_param8');
           $table->string('nef_param9');
           $table->string('nef_param10');
           $table->string('nef_param11');
           $table->string('nef_param12');
           $table->string('nef_param13');
           $table->string('nef_param14');
           $table->string('nef_param15');
        });

        for ($i=1; $i<=10; $i++) {
            Schema::create('new_comment_'.$i, function (Blueprint $table) {
                $table->increments('nec_id');
                $table->integer('nec_user_id');
                $table->integer('nec_parent_id');
                $table->integer('nec_new_id');
                $table->integer('nec_vote');
                $table->integer('nec_view');
                $table->integer('nec_like');
                $table->text('nec_teaser');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tintucs');
        Schema::dropIfExists('new_fastfoods');

        for ($i=1; $i<=20; $i++)
        {
            Schema::dropIfExists('new_content_'.$i);
        }
        for ($i=1; $i<=10; $i++) {
            Schema::dropIfExists('new_comment_'.$i);
        }
    }
}
