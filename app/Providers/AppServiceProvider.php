<?php

namespace App\Providers;

use App\Services\AuthServices;
use App\Services\AdminServices;
use App\Services\GalleryServices;
use App\Repositories\AuthReposetorie;
use App\Services\photographeServices;
use App\Repositories\AdminReposetorie;
use Illuminate\Support\ServiceProvider;
use App\Repositories\GalleryReposetorie;
use App\Repositories\PhotographeReposetorie;
use App\Services\Interfaces\AuthServiceInterface;
use App\Services\Interfaces\AdminServicesInterface;
use App\Services\Interfaces\GalleryServicesIntreface;
use App\Services\Interfaces\photographeServiceInterface;
use App\Repositories\Interfaces\AuthReposetorieInterface;
use App\Repositories\Interfaces\AdminRepositorieInterface;
use App\Repositories\Interfaces\PhotographeRepoInterfaces;
use App\Repositories\Interfaces\GalleryReposetorieInterface;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(AuthServiceInterface::class, AuthServices::class);
        $this->app->bind(AuthReposetorieInterface::class, AuthReposetorie::class);

        $this->app->bind(photographeServiceInterface::class, photographeServices::class);
        $this->app->bind(PhotographeRepoInterfaces::class, PhotographeReposetorie::class);

        $this->app->bind(AdminServicesInterface::class, AdminServices::class);
        $this->app->bind(AdminRepositorieInterface::class, AdminReposetorie::class);

        $this->app->bind(GalleryServicesIntreface::class, GalleryServices::class);
        $this->app->bind(GalleryReposetorieInterface::class, GalleryReposetorie::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
