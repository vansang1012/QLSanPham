<?php

namespace App\Providers;

use App\Http\Repository\Contract\EmployeeRepositoryInterface;
use App\Http\Repository\Contract\RepositoryInterface;
use App\Http\Repository\Eloquent\EmployeeRepositoryEloquent;
use App\Http\Repository\Eloquent\RepositoryEloquent;
use App\Http\Service\EmployeeServiceInterface;
use App\Http\Service\Impl\EmployeeService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RepositoryInterface::class,
            RepositoryEloquent::class);
        $this->app->singleton(EmployeeRepositoryInterface::class,
            EmployeeRepositoryEloquent::class);
        $this->app->singleton(EmployeeServiceInterface::class,
            EmployeeService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
