<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\menu;
use App\Models\baiviet;
use Illuminate\Pagination\Paginator;


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
        view()->composer('front.menu', function ($view)
        {
            $menu = menu::all();
            $baiviet = baiviet::all();
            $view->with(['menu'=>$menu,'baiviet'=>$baiviet]);
            
        });
        
        

        Paginator::useBootstrap();
    }
}
