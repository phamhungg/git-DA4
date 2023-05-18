<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\menu;

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
            $view->with(['menu'=>$menu]);
        });
    }
}
