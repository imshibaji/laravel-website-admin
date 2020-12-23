<?php

namespace Shibaji\Admin\Console;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Admin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:install {argv?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Admin Command for installation process';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $clear = Artisan::call('clear-compiled');
        $this->info("Pre-Compiled Data cleared.");

        $opt = Artisan::call('optimize:clear');
        $this->info("Optimized Systems resources.");

        $opt1 = Artisan::call('vendor:publish --tag=admin-assets');
        $this->info("Admin Assets published.");

        $opt2 = Artisan::call('vendor:publish --tag=admin-auth');
        $this->info("Admin Auth View published.");

        $opt3 = Artisan::call('vendor:publish --tag=admin-config');
        $this->info("Admin Systems Config published.");

        $opt4 = Artisan::call('vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"');
        $this->info("Admin Modules Config published.");

        $opt5 = Artisan::call('module:setup');
        $this->info("Admin Modules Setup completed.");

        $opt6 = Artisan::call('vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"');
        $this->info("Admin Permission Package published.");


        $opt = Artisan::call('optimize:clear');
        $this->info("Optimized Systems resources.");

        $clear = Artisan::call('config:clear');
        $this->info("Pre-Configuration Data cleared.");

        // $opt4 = Artisan::call('ui:auth');
        // $this->info("Admin Auth Scafold published.");
    }
}
