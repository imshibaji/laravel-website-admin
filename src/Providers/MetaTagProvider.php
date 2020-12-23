<?php

namespace Shibaji\Admin\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Shibaji\Admin\Classes\MetaBuilder;

class MetaTagProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('meta', function () {
            $url = $_SERVER['PATH_INFO'];
            return MetaBuilder::render($url);
        });
        // Template Variables
        view()->share('assetLink', config('admin.assets', 'assets'));
    }
}
