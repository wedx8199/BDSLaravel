<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\City;
use App\Type;

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
        //
        Schema::defaultStringLength(191);
        view()->composer('sidebar',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });
        view()->composer('header',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });
        view()->composer('header',function($view){
            $type = Type::all();
            $view->with('type',$type);
        });

        view()->composer('main.index',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });
        view()->composer('main.index',function($view){
            $type = Type::all();
            $view->with('type',$type);
        });
        view()->composer('main.header',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });


        view()->composer('main.allpost',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });
        view()->composer('main.thue',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });
        view()->composer('main.canmuathue',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });
        view()->composer('main.search',function($view){
            $city = City::with('district')->get();
            $view->with('city',$city);
        });
    }
}
