<?php

namespace Marxolity\VinDecoder\Providers;

use Illuminate\Support\ServiceProvider;
use Marxolity\VinDecoder\Services\VinDecoder\VinAudit;
use Marxolity\VinDecoder\Services\VinDecoder\VinDecoderInterface;
use GuzzleHttp\Client;

class VinDecoderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VinDecoderInterface::class, function() {
            return new VinAudit(config('vindecoder.vin_audit.api_key'), new Client);
        });

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'vindecoder');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // php artisan vendor:publish --provider="Marxo\VinDecoder\Providers\VinDecoderServiceProvider" --tag="config"
            $this->publishes([
              __DIR__.'/../config/config.php' => config_path('vindecoder.php'),
            ], 'config');
        
          }
    }
}
