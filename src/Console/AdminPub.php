<?php

namespace Shibaji\Admin\Console;

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

        $optins = [
            'Configuration File',
            'Assets Files',
            'Views Files',
            'Databases Files',
            'Factories Files',
            'Seeds Files',
            'Translate Files'
        ];
        $q = array_search($this->choice(
            "Which provider or tag's files would you like to publish?",
            $optins), $optins);

            if($q == 0){
                Artisan::call('vendor:publish --tag=admin-config');
                Artisan::call('config:clear');
                $this->info('Configuration File published');
            }
            else if($q == 1){
                Artisan::call('vendor:publish --tag=admin-assets');
                $this->info('Assets Files published');
            }
            else if($q == 2){
                Artisan::call('vendor:publish --tag=admin-views');
                Artisan::call('view:clear');
                $this->info('Views Files published');
            }
            else if($q == 3){
                Artisan::call('vendor:publish --tag=admin-migration');
                $this->info('Databases Files published');
            }
            else if($q == 4){
                Artisan::call('vendor:publish --tag=admin-factories');
                $this->info('Factories Files published');
            }
            else if($q == 5){
                Artisan::call('vendor:publish --tag=admin-seeds');
                $this->info('Seeds Files published');
            }
            else if($q = 6){
                Artisan::call('vendor:publish --tag=admin-trans');
                $this->info('Translate Files published');
            }


        return ;
    }
}
