<?php

namespace Account\Providers;

use Account\Services\AccountService;
use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AccountService::class);
    }

    public function boot()
    {
        if (file_exists($routes = $this->routePath())) {
            $this->loadRoutesFrom($routes);
        }
    }

    private function routePath(): string
    {
        return __DIR__ . "/../route.php";
    }
}
