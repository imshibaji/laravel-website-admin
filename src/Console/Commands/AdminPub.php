<?php

namespace Shibaji\Admin\Console\Commands;

use Illuminate\Console\Command;

class AdminPub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:publish {argv?}';

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

        $q = $this->line('Test Output: ', 'a');
        // $q = $this->argument('argv');
        $this->info('A: '. $q);
        return ;
    }
}
