<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
    }

    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(
            \App\Services\Contracts\CustomerServiceContract::class,
            \App\Services\CustomerService::class
        );
        $this->app->bind(
            \App\Services\Contracts\CategoryServiceContract::class,
            \App\Services\CategoryService::class
        );
        $this->app->bind(
            \App\Services\Contracts\ProductServiceContract::class,
            \App\Services\ProductService::class
        );
    }
}
