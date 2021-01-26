<?php
namespace Shibaji\Admin;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Maatwebsite\Excel\ExcelServiceProvider;
use Plank\Metable\MetableServiceProvider;
use Shibaji\Admin\Console\Admin;
use Shibaji\Admin\Console\AdminPub;
use Shibaji\Admin\Models\Common\Business;
use Shibaji\Admin\Providers\MetaTagProvider;
use Shibaji\Admin\Providers\RouteServiceProvider;
use Shibaji\Admin\Providers\WigetsProvider;
use Spatie\Permission\PermissionServiceProvider;

require_once( __DIR__ . '/helpers/utilities.php');

class AdminServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/admin.php', 'admin'
        );
        $this->mergeConfigFrom(
            __DIR__.'/config/money.php', 'money'
        );
        $this->mergeConfigFrom(
            __DIR__.'/config/timezone.php', 'timezone'
        );
        $this->bindProviders();
    }

    public function boot(){
        Schema::defaultStringLength(191);

        $this->app->bind('calculator', function($app) {
            return new Calculator();
        });

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Resources
        $this->loadViewsFrom(__DIR__.'/resources/views', 'admin');
        $this->loadTranslationsFrom(__DIR__.'/resources/translations', 'admin');

        $this->bindConsoleCommands();
        $this->loadResources();
    }

    private function bindConsoleCommands(){
        if ($this->app->runningInConsole()) {
            $this->commands([
                Admin::class,
                AdminPub::class,
            ]);
        }
    }

    private function bindProviders(){
        $this->app->register(PermissionServiceProvider::class);
        $this->app->register(ExcelServiceProvider::class);
        $this->app->register(MetableServiceProvider::class);
        $this->app->register(MetaTagProvider::class);
        $this->app->register(WigetsProvider::class);
        $this->app->register(RouteServiceProvider::class);

        $loader = AliasLoader::getInstance();
        $loader->alias('Markdown', 'GrahamCampbell\Markdown\Facades\Markdown');
        $loader->alias('Excel', 'Maatwebsite\Excel\Facades\Excel');
    }

    private function loadResources(){
        // Resource Shareing to the public
        $this->publishes([
            // __DIR__.'/resources' => public_path(config('admin.assets', 'assets')),
            __DIR__.'/resources/public' => public_path('/'),
        ], 'admin-assets');

        $this->publishes([
            __DIR__.'/config/admin.php' => config_path('admin.php'),
        ], 'admin-config');

        $this->publishes([
            __DIR__.'/database/seeders/DatabaseSeeder.php' => database_path('/seeders/DatabaseSeeder.php'),
        ], 'admin-seeder');

        $this->publishes([
            __DIR__.'/config/permission.php' => config_path('permission.php'),
        ], 'admin-config-permission');

        $this->publishes([
            __DIR__.'/resources/translations' => resource_path('lang/vendor/courier'),
        ], 'admin-trans');

        $this->publishes([
            __DIR__.'/resources/views/admin' => resource_path('views/vendor/admin'),
        ], 'admin-views');

        $this->publishes([
            __DIR__.'/resources/views/auth' => resource_path('views/auth'),
        ], 'admin-auth');

        // Partial Discover Resources
        $this->publishes([
            __DIR__.'/resources/views/dashboards' => resource_path('views/vendor/admin/dashboards'),
        ], 'admin-views-dashboard');

        $this->publishes([
            __DIR__.'/resources/views/pages' => resource_path('views/vendor/admin/pages'),
        ], 'admin-views-pages');

        $this->publishes([
            __DIR__.'/resources/views/seo' => resource_path('views/vendor/admin/seo'),
        ], 'admin-views-seo');
    }
}
