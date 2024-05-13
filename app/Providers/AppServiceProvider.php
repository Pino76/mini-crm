<?php

namespace App\Providers;

use App\Interface\IFailedJobsRepository;
use App\Repository\FailedJobsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind( IFailedJobsRepository::class, FailedJobsRepository::class,);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
