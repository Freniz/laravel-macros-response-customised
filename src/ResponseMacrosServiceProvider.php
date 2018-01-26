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
            //
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->make('Freniz\ResponseMacros\ResponseMacros');
    }
}
