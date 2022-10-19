# Vin Decoder (Vin Audit)
laravel package: Get vehicle details by using vin (Vin Audit Api)
# Installation
```bash
composer require marxolity/vin-decoder
```
## Config
```bash
php artisan vendor:publish --provider="Marxolity\VinDecoder\Providers\VinDecoderServiceProvider" --tag="config"
```
## Setup -> Env
```bash
VIN_DECODER_VIN_AUDIT_API_KEY="<<API_KEY_HERE>>"
```
## config/app.php
```bash
    'providers' => [
        ...
        Marxolity\VinDecoder\Providers\VinDecoderServiceProvider::class,
    ],
    'aliases' => Facade::defaultAliases()->merge([
        'VinDecoder' => Marxolity\VinDecoder\Facades\VinDecoder::class
    ])->toArray(),
```
## Usage
```bash
   \VinDecoder::getMarketValueByVin('WP1AA2A5XHLB04821'); # output: ?array (array or null)
```

