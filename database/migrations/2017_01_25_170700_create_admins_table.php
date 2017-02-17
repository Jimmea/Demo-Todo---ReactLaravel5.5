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
            $table->string('adm_loginname')->nullable();
            $table->string('adm_name')->nullable();
            $table->string('adm_phone')->nullable();
            $table->string('adm_password')->nullable();
            $table->string('adm_email')->nullable();
            $table->string('adm_picture')->nullable();
            $table->string('adm_address')->nullable();
            $table->string('adm_access_module')->nullable();
            $table->string('adm_access_category')->nullable();
            $table->integer('adm_isadmin')->nullable();
            $table->integer('adm_active')->default(1);
            $table->integer('adm_delete')->nullable();
            $table->integer('adm_all_category')->nullable();
            $table->integer('adm_edit_all')->nullable();
            $table->integer('adm_admin_id');
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
