<?php

namespace Shibaji\Admin\Console;

use Illuminate\Console\GeneratorCommand;

class MakeAdmin extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }

    protected function getStub()
    {
        return __DIR__ . '../../stubs/controller.stub';
    }
}
