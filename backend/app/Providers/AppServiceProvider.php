<?php

namespace App\Providers;

use App\Http\Services\Contracts\DeveloperServiceInterface;
use App\Http\Services\DeveloperService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DeveloperServiceInterface::class, DeveloperService::class);
        $this->app->bind(DeveloperRepositoryInterface::class, DeveloperRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
