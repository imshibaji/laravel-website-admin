<?php
namespace Shibaji\Admin;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Shibaji\Admin\Classes\MetaBuilder;
use Shibaji\Admin\Components\Alert;
use Shibaji\Admin\Components\Notification;
use Shibaji\Admin\Components\Search;
use Shibaji\Admin\Components\Seo;
use Shibaji\Admin\Components\Shortcuts;
use Shibaji\Admin\Components\Translate;
use Shibaji\Admin\Console\Commands\Admin;
use Shibaji\Admin\Console\Commands\AdminPub;
use Shibaji\Admin\Http\Livewire\Counter;

// require_once( __DIR__ . '/helpers/utilities.php');

class AdminServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/admin.php', 'admin'
        );
    }

    public function boot(){
        Schema::defaultStringLength(191);


        // $lf = new LeftMenu();

        // $lf->append('app', [
        //     'link' => '',
        //     'label' => 'App Test Menu',
        //     'child' => [
        //         [
        //             'link' => '#Test',
        //             'label' => 'Test Submenu'
        //         ]
        //     ]
        // ]);

        // $this->loadFactoriesFrom(__DIR__.'/database/factories');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'admin');
        $this->loadTranslationsFrom(__DIR__.'/resources/translations', 'admin');


        $this->loadViewComponentsAs('admin', [
            Alert::class,
            Search::class,
            Shortcuts::class,
            Translate::class,
            Notification::class,
            Seo::class,
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                Admin::class,
                AdminPub::class,
            ]);
        }

        Blade::directive('meta', function () {
            $url = $_SERVER['PATH_INFO'];
            return MetaBuilder::render($url);
        });

        // Template Variables
        view()->share('assetLink', config('admin.assets', 'assets'));
        // view()->share('user', Auth::user()); // Not working

        $this->loadResources();
        $this->loadLivewares();

    }

    private function loadLivewares(){
        Livewire::component('admin-counter', Counter::class);
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
            __DIR__.'/database/migrations/' => database_path('migrations'),
        ], 'admin-migration');

        $this->publishes([
            __DIR__.'/database/factories/' => database_path('factories'),
        ], 'admin-migration');

        $this->publishes([
            __DIR__.'/database/seeds/' => database_path('seeds'),
        ], 'admin-seeds');

        $this->publishes([
            __DIR__.'/resources/translations' => resource_path('lang/vendor/courier'),
        ], 'admin-trans');

        $this->publishes([
            __DIR__.'/resources/views/admin' => resource_path('views/vendor/admin'),
        ], 'admin-views');

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
