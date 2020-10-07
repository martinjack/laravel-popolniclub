<?php

namespace PopolniClubLaravel;

use Illuminate\Support\ServiceProvider;
use PopolniClubLaravel\PopolniClubLaravel;

class PopolniClubServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return VOID
     */
    public function boot()
    {

        $configPath = __DIR__ . '/config/popolniclub-laravel.php';

        $this->publishes([$configPath => config_path('popolniclub-laravel.php')], 'popolniclub-laravel-config');

    }

    /**
     * Register the service provider.
     *
     * @return VOID
     */
    public function register()
    {

        $this->app->bind('popolniclubLaravel', function () {

            return new PopolniClubLaravel;

        });

    }

}
