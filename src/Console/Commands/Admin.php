<?php

namespace Shibaji\Admin\Console\Commands;

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

        $opt2 = Artisan::call('ui:auth');
        $this->info("Admin Auth Scafold published.");

        $opt3 = Artisan::call('vendor:publish --tag=admin-auth');
        $this->info("Admin Auth View published.");

        $opt4 = Artisan::call('vendor:publish --tag=admin-config');
        $this->info("Admin Systems Config published.");
    }
}
