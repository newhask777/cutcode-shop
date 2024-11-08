<?php

namespace App\Providers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Foundation\Vite;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        Vite::macro('image', fn($asset) => $this->asset("resources/images/$asset"));
    }
}
