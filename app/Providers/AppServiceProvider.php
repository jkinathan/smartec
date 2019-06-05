<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
=======
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
>>>>>>> 75ec82ba21b09773cc59059b6781dbfe73785aef
    {
        //
    }
}
