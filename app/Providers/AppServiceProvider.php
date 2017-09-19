<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{

    /*
     * This will make it so that this provider will only be loaded once requested.
     * Will not be available whenever you have something in your boot method!!
    //protected $defer = true;
    */

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * This will work as well, now we can make a specific view composer class!
         * //view()->composer('layouts.sidebar'), ??::class)
         */
        view()->composer('layouts.sidebar', function ($view) {
            $view->with('archives', \App\Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //This is a service container
        //This will allow is to resolve this function/class everywhere on the project
        $this->app->singleton(Stripe::class, function ($app) {
            return new Stripe(config('services.stripe.secret'));
        });

    }
}
