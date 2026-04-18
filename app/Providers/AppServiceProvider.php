<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Baris ini jangan sampai lupa

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Ini akan memaksa semua link (CSS/JS) menggunakan https di Railway
        if (config('app.env') === 'production' || $this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}