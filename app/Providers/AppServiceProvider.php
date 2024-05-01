<?php

namespace App\Providers;

use App\Services\AuthServices;
use App\Repositories\AuthReposetorie;
use App\Services\photographeServices;
use App\Repositories\AdminReposetorie;
use Illuminate\Support\ServiceProvider;
use App\Repositories\PhotographeReposetorie;
use App\Services\Interfaces\AuthServiceInterface;
use App\Services\Interfaces\photographeServiceInterface;
use App\Repositories\Interfaces\AdminReposetorieIntrface;
use App\Repositories\Interfaces\AuthReposetorieInterface;
use App\Repositories\Interfaces\PhotographeRepoInterfaces;
use App\Services\AdminServices;
use App\Services\Interfaces\AdminServicesInterface;

class AppServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        $this->app->bind(AuthServiceInterface::class, AuthServices::class);
        $this->app->bind(AuthReposetorieInterface::class, AuthReposetorie::class);
        $this->app->bind(photographeServiceInterface::class,photographeServices::class);
        $this->app->bind(PhotographeRepoInterfaces::class,PhotographeReposetorie::class);
       


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
