<?php

namespace App\Providers;

use App\Services\AuthServices;
use App\Repositories\AuthReposetorie;
use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\AuthServiceInterface;
use App\Repositories\Interfaces\AuthReposetorieInterface;

class AppServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        $this->app->bind(AuthServiceInterface::class, AuthServices::class);
        $this->app->bind(AuthReposetorieInterface::class, AuthReposetorie::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
