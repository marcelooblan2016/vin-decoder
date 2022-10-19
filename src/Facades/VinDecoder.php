<?php

namespace Marxo\VinDecoder\Facades;

use Illuminate\Support\Facades\Facade;
use Marxo\VinDecoder\Services\VinDecoder\VinDecoderInterface;
class VinDecoder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return VinDecoderInterface::class;
    }
}