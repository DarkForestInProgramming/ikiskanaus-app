<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserRegistrationService;

class UserRegistrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserRegistrationService::class, function ($app) {
            return new UserRegistrationService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
