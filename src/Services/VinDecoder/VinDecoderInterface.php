<?php

namespace Marxo\VinDecoder\Services\VinDecoder;

interface VinDecoderInterface {
    public function getVehicleSpecificationByVin(string $vin): ?array;
    public function getMarketValueByVin(string $vin): ?array;
}