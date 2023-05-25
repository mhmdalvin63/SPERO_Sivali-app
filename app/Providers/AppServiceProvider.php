<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();
        // Paginator::useBootstrap();
        // Paginator::defaultView('vendor.pagination.default');
        Paginator::defaultView('vendor.your-pagination-view-name');
        Paginator::defaultSimpleView('vendor.your-pagination-view-name');
        
    }
}
