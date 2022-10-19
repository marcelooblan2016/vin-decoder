<?php

namespace Marxolity\VinDecoder\Facades;

use Illuminate\Support\Facades\Facade;
use Marxolity\VinDecoder\Services\VinDecoder\VinDecoderInterface;
class VinDecoder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return VinDecoderInterface::class;
    }
}