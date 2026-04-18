<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
{
    URL::forceScheme('https'); // Coba hapus dulu kondisi 'if' nya, paksa saja semuanya ke https
}
}   