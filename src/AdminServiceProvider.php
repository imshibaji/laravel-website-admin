<?php
namespace Shibaji\Admin;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Maatwebsite\Excel\ExcelServiceProvider;
use Plank\Metable\MetableServiceProvider;
use Shibaji\Admin\Classes\MetaBuilder;
use Shibaji\Admin\Console\Admin;
use Shibaji\Admin\Console\AdminPub;
use Shibaji\Admin\Providers\MetaTagProvider;
use Shibaji\Admin\View\Components\Alert;
use Shibaji\Admin\View\Components\Breadcrumb;
use Shibaji\Admin\View\Components\Datatable;
use Shibaji\Admin\View\Components\Input;
use Shibaji\Admin\View\Components\Modal;
use Shibaji\Admin\View\Components\Notification;
use Shibaji\Admin\View\Components\Search;
use Shibaji\Admin\View\Components\Seo;
use Shibaji\Admin\View\Components\Shortcuts;
use Shibaji\Admin\View\Components\Translate;
use Spatie\Permission\PermissionServiceProvider;

require_once( __DIR__ . '/helpers/utilities.php');

class AdminServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/admin.php', 'admin'
        );
        $this->bindProviders();
    }

    public function boot(){
        Schema::defaultStringLength(191);

        $this->app->bind('calculator', function($app) {
            return new Calculator();
        });

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Resources
        $this->loadViewsFrom(__DIR__.'/resources/views', 'admin');
        $this->loadTranslationsFrom(__DIR__.'/resources/translations', 'admin');

        $this->bindComponents();
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

    private function bindComponents(){
        $this->loadViewComponentsAs('admin', [
            Alert::class,
            Modal::class,
            Search::class,
            Shortcuts::class,
            Translate::class,
            Notification::class,
            Seo::class,
            Datatable::class,
            Breadcrumb::class,
            Input::class
        ]);
    }

    private function bindProviders(){
        $this->app->register(PermissionServiceProvider::class);
        $this->app->register(ExcelServiceProvider::class);
        $this->app->register(MetableServiceProvider::class);
        $this->app->register(MetaTagProvider::class);

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
