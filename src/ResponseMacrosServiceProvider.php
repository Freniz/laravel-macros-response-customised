<?php

namespace Freniz\ResponseMacros;

use Illuminate\Support\ServiceProvider;

class ResponseMacrosServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
           
        $this->publishes([
            $this->getConfigPath => config_path('laravelmacros.php'),
        ], 'laravelmacros');

        if (!copy($this->getConfigPath, $this->getMainConfigPath)) {
            echo "failed to copy $file...\n";
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

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [

        ];
    }

    private function getConfigPath()
    {
        return __DIR__.'/../config/laravelmacros.php';
    }

    private function getMainConfigPath()
    {
        return __DIR__.'/../../../../config/laravelmacros.php';
    }

}
