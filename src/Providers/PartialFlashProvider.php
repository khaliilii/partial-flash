<?php

namespace Khaliilii\PartialFlash\Providers;

use Illuminate\Support\ServiceProvider;
use  Khaliilii\PartialFlash\Facade\Flash;

class PartialFlashProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //__DIR__.'/../js' => public_path('js') ,

        $this->publishes([
            __DIR__.'/../view/partial' => resource_path('views/vendor/partial'),
            __DIR__ .'/../js'  => public_path('/js'),
            __DIR__ .'/../css'  => public_path('/css'),
        ]);


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHelpers();
        /*
        $this->app->bind('PartialFlash',function (){
            return new Flash();
        });
        */
    }

    public function registerHelpers()
    {
        // Load the helpers in src/functions.php
        if (file_exists($file = __DIR__ . '/../Helpers/Helpers.php')) {
            require $file;
        }
    }
}
