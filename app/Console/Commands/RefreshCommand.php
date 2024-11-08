<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RefreshCommand extends Command
{

    protected $signature = 'shop:fresh';

    protected $description = 'Refresh';

    public function handle()
    {
        if (app()->isProduction()) {
            return self::FAILURE;
        }

        // Try on Ubuntu
        //Storage::deleteDirectory('images/products');

        // Get all files in a directory
        $files = Storage::allFiles('public/images/products');
        // Delete Files
        Storage::delete($files);

        $this->call('migrate:fresh', [
            '--seed' => true,
        ]);

        return self::SUCCESS;
    }
}

