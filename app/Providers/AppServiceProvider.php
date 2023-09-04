<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;    //How to use bootstrap pagination in laravel 8


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();
        Paginator::useBootstrap();
        // paginate에 관한 기본제공 bootstrap코드를 넣으면 깨지지 않는다.
        // How to use bootstrap pagination in laravel 8
    }
}
