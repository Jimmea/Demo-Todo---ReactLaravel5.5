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
            $table->string('new_slug');
            $table->string('new_more_slug');
            $table->string('new_title_md5');
            $table->string('new_domain_id');
            $table->string('new_link_from_domain');
            $table->string('new_picture');
            $table->integer('new_cate_id')->index();
            $table->string('new_description');
            $table->integer('new_top');
            $table->integer('new_hot');
            $table->integer('new_status');
            $table->integer('new_order');
            $table->tinyInteger('new_type'); // crawl 0; // ng dung dang bai 1 // bosuutap 3
            $table->integer('new_admin_id')->index();
            $table->string('new_param1');
            $table->string('new_param2');
            $table->string('new_param3');
            $table->string('new_param4');
            $table->string('new_param5');
            $table->string('new_param6');
            $table->string('new_param7');
            $table->string('new_param8');
            $table->string('new_param9');
            $table->string('new_param10');
            $table->string('new_param11');
            $table->string('new_param12');
            $table->string('new_param13');
            $table->string('new_param14');
            $table->string('new_param15');
            $table->timestamps();
        });

        for ($i=1; $i<=20; $i++)
        {
            Schema::creates('new_content_'.$i, function (Blueprint $table) {
                $table->integer('nec_id')->unsigned()->index();
                $table->string('nec_video');
                $table->text('nec_content');
                $table->string('nec_seo_title');
                $table->string('nec_seo_keyword');
                $table->text('nec_collection_recipes'); // bo suu tap cong thuc
                $table->text('nec_collection_address'); // bo suu tap dia diem an uong
                $table->text('nec_ingredients');
                $table->text('nec_directions');
                $table->text('nec_seo_description');
                $table->string('nec_seo_metah1');
            });
        }

        Schema::creates('new_pictures', function (Blueprint $table) {
           $table->increments('nep_id');
           $table->integer('nep_new_id')->unsigned()->index();
           $table->string('nep_picture');
           $table->string('nep_note');
           $table->string('nep_description');
           $table->tinyInteger('nep_main_picture');
           $table->tinyInteger('nep_version'); // mobile and desktop
            $table->timestamps();
        });

        Schema::creates('new_fastfoods', function (Blueprint $table) {
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
            Schema::creates('new_comment_'.$i, function (Blueprint $table) {
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
        Schema::dropIfExists('new_pictures');

        for ($i=1; $i<=20; $i++)
        {
            Schema::dropIfExists('new_content_'.$i);
        }
        for ($i=1; $i<=10; $i++) {
            Schema::dropIfExists('new_comment_'.$i);
        }
    }
}
