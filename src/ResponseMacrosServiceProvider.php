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
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravelmacros.php'),
        ], 'laravelmacros-config');

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravelmacros');

        $this->app->make('Freniz\ResponseMacros\ResponseMacros');
    }
}
