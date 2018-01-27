<?php

namespace Freniz\ResponseMacros;

use Illuminate\Support\ServiceProvider;

class ResponseMacrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
           
            $this->publishes([
                __DIR__.'/../config/laravelmacros.php' => config_path('laravelmacros.php'),
            ], 'config');
        }

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelmacros.php', 'laravelmacros');

        $this->app->make('Freniz\ResponseMacros\ResponseMacros');
    }
}
