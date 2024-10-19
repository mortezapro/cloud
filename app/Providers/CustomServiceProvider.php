<?php

namespace App\Providers;

use App\Services\Directory\DirectoryService;
use App\Services\Directory\DirectoryServiceInterface;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DirectoryServiceInterface::class,DirectoryService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
