<?php

namespace MagsLabs\CustomHasher\Providers;

use Illuminate\Support\ServiceProvider;

class CustomHasherProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('hash', function() {
            return new CustomHasher();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */

    public function provides() {
        return array('hash');
    }
}