<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
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
        $models = [
            'Tintucs'               => 'Tintuc',
            'Admins'                => 'Admin',
            'AdminUserRights'       => 'AdminUserRight',
            'Banners'               => 'Banner',
            'Categories'            => 'Category',
            'Menus'                 => 'Menu',
            'Tags'                  => 'Tag',
            'Events'                => 'Event',
            'EventNewCategoryUsers' => 'EventNewCategoryUser',
            'SuggestKeywords'       => 'SuggestKeyword',
            'SuggestSearchs'        => 'SuggestSearch',
        ];

        $concrete   = 'Eloquent';
        $abstract   =  'Repository';
        foreach ($models as $dir => $model)
        {
            $this->app->singleton(
                'App\Models\\' . $dir . '\\'. $model . $abstract,
                'App\Models\\' . $dir .'\\' . $concrete . $model
            );
        }
    }
}
