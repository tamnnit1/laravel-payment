<?php

namespace Laravel\Payment;

use Illuminate\Support\ServiceProvider;

/**
 * @author tamnnit
 * @since 1.0.0
 */
class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Boot package services.
     */
    public function boot(): void
    {
        $this->publishConfigs();
    }

    /**
     * Publish package service configs.
     */
    protected function publishConfigs(): void
    {
        $this->publishes([
            __DIR__.'/../config/laravel-payment.php' => $this->app->configPath('laravel-payment.php'),
        ], 'config');
    }
}
