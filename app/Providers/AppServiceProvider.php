<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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

    public function boot()
    {
        // Define the $activePage variable for the specified views
        View::composer(['MyClients.index', 'other.view'], function ($view) {
            $view->with('activePage', 'tables');
        });
    }
    
}
