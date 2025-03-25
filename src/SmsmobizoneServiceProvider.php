<?php

namespace Nekkoy\GatewaySmsmobizone;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class SmsmobizoneServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(\Nekkoy\GatewaySmsmobizone\Services\GatewayService::class, function ($app) {
            return new \Nekkoy\GatewaySmsmobizone\Services\GatewayService();
        });

        $this->app->singleton('gateway-smsmobizone', function ($app) {
            return new \Nekkoy\GatewaySmsmobizone\Services\GatewaySmsmobizoneService();
        });
    }

    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('gateway-smsmobizone.php')], 'config');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'gateway-smsmobizone');
    }
}
