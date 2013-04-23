<?php namespace Diablo3;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register 'underlyingclass' instance container to our UnderlyingClass object
        $this->app['diablo3util'] = $this->app->share(function($app)
        {
            return new Diablo3\Diablo3Util;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Diablo3Util', 'Diablo3\Facades\Diablo3Util');
        });
    }
}
