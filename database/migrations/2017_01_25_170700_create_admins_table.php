<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->increments('adm_id');
            $table->string('adm_loginname');
            $table->string('adm_password');
            $table->string('adm_name');
            $table->string('adm_email');
            $table->string('adm_address');
            $table->string('adm_phone');
            $table->string('adm_mobile');
            $table->string('adm_access_module');
            $table->string('adm_access_category');
            $table->integer('adm_date');
            $table->integer('adm_isadmin');
            $table->integer('adm_active');
            $table->integer('adm_delete');
            $table->integer('adm_all_category');
            $table->integer('adm_edit_all');
            $table->timestamps();
        });

        Schema::create('admin_user_categories', function (Blueprint $table) {
            $table->integer('auc_admin_id');
            $table->integer('auc_category_id');
        });

        Schema::create('admin_user_right', function (Blueprint $table) {
            $table->integer('adu_admin_id');
            $table->integer('adu_admin_module_id');
            $table->integer('adu_add');
            $table->integer('adu_edit');
            $table->integer('adu_delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_users');
        Schema::dropIfExists('admin_user_categories');
        Schema::dropIfExists('admin_user_right');
    }
}
