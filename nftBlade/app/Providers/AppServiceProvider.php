<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

////////////////////////////////////////////////////////////////////
use Illuminate\Support\Facades\Hash;
use Illuminate\Hashing\HashManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ///////////////////////////////////////////////////////////////////////////////
        $this->app->singleton('hash', function ($app) {
            return new HashManager($app);
        });
        
        $this->app->extend('hash', function (HashManager $hashManager) {
            $hashManager->extend('md5', function () {
                return new \Illuminate\Hashing\HashManager\MD5Hasher;
            });
        
            return $hashManager;
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
