<?php

namespace App\Providers;

use App\Services\Implementation\MarketStockService;
use App\Services\Interface\MarketStockServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MarketStockServiceInterface::class, MarketStockService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
