<?php

namespace App\Providers;

use App\Models\SiteContact;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('partials.footer', function ($view) {
            $siteContact = SiteContact::first();
            $view->with('siteContact', $siteContact);
        });
    }
}
