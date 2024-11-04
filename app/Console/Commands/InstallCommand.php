<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'shop:install';

    protected $description = 'Installation';
    public function handle()
    {
        $this->call('key:generate');
        $this->call('storage:link');
        $this->call('telescope:install');
        $this->call('migrate');

        return self::SUCCESS;
    }
}
