<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\NumberInterface;
use App\Repositories\NumberRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(NumberInterface::class, NumberRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
