<?php

namespace App\Providers;

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
       app()->bind('first_service_provider', function($app){
        dd('this is my first service container');
       });
       app()->bind('second_service_provider', function($app){
        dd('this is my seond service container');
       });
       app()->bind('third_service_provider', function($app){
        dd('this is my third service container');
       });
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
