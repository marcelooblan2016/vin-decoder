<?php
namespace Marxolity\VinDecoder\Tests;
use Marxolity\VinDecoder\Services\VinDecoder\VinDecoderInterface;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected $vinDecoder;
    /**
     * Set up
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->vinDecoder = app(VinDecoderInterface::class);
    }

    /**
     * Define environment setup.
     *
     * @param  Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        //
        $app['config']->set('vindecoder.vin_audit.api_key', 'VA_DEMO_KEY');
    }

    /**
     * @param Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Marxolity\VinDecoder\Providers\VinDecoderServiceProvider::class
        ];
    }
}