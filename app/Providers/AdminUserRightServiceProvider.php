<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdminUserRightServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Models\AdminUserRights\AdminUserRightRepository', 'App\Models\AdminUserRights\EloquentAdminUserRight');
    }
}
