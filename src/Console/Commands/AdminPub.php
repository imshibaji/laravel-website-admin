<?php

namespace Shibaji\Admin\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class AdminPub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:pub {argv?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Admin Command for asset publishing process';

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

        $q = $this->choice(
            "Which provider or tag's files would you like to publish?",
            [
                'Configuration File',
                'Assets Files',
                'Views Files',
                'Databases Files',
                'Factories Files',
                'Seeds Files',
                'Translate Files'
            ]
        );
        if($q == 0){
            Artisan::call('vendor:publish --tag=admin-config');
            Artisan::call('config:clear');
        }
        if($q == 1){
            Artisan::call('vendor:publish --tag=admin-assets');
        }
        if($q == 2){
            Artisan::call('vendor:publish --tag=admin-views');
            Artisan::call('views:clear');
        }
        if($q == 3){
            Artisan::call('vendor:publish --tag=admin-migration');
        }
        if($q == 4){
            Artisan::call('vendor:publish --tag=admin-factories');
        }
        if($q == 5){
            Artisan::call('vendor:publish --tag=admin-seeds');
        }
        if($q == 6){
            Artisan::call('vendor:publish --tag=admin-trans');
        }

        $this->info('A: '. $q . ' published');
        return ;
    }
}
