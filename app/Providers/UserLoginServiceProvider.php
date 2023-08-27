<?php

namespace App\Providers;

use App\Services\UserLoginService;
use Illuminate\Support\ServiceProvider;

class UserLoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserLoginService::class, function ($app) {
            return new UserLoginService();
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
