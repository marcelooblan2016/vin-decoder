<?php

namespace Marxolity\VinDecoder\Services\VinDecoder;
use Marxolity\VinDecoder\Services\VinDecoder\VinDecoderInterface;
use GuzzleHttp\ClientInterface;
use Exception;

class VinAudit implements VinDecoderInterface {
    /**
     ******************************************************************************
     * About: https://www.vinaudit.com/
     ******************************************************************************
     */
    public function __construct(protected ?string $apiKey, protected ClientInterface $client) {}

    protected function isApiKeySet(): void
    {
        if (empty($this->apiKey)) throw new Exception("apiKey not set (Env: VIN_DECODER_VIN_AUDIT_API_KEY)", 1);
        
    }
    /*
     * Request vehicle specification from vin_audit api
     * @params: (string) $vin
     */
    public function getVehicleSpecificationByVin(string $vin): ?array
    {
        $this->isApiKeySet();

        $apiUrl = config('vindecoder.vin_audit.urls.vehicle_specification_by_vin');
        $apiUrl = vsprintf(config('vindecoder.vin_audit.urls.vehicle_specification_by_vin'), [
            $this->apiKey,
            'json',
            $vin,
        ]);

        $rawResponse = $this->client->request('get', $apiUrl);
        $decodedResponse = json_decode($rawResponse->getBody()->getContents(), true);

        return $decodedResponse;
    }
    /*
     * Request vehicle market value from vin_audit api
     * @params: (string) $vin
     */
    public function getMarketValueByVin(string $vin): ?array
    {
        $this->isApiKeySet();

        $apiUrl = vsprintf(config('vindecoder.vin_audit.urls.vehicle_market_value_by_vin'), [
            $this->apiKey,
            'json',
            $vin,
        ]);

        $rawResponse = $this->client->request('get', $apiUrl);
        $decodedResponse = json_decode($rawResponse->getBody()->getContents(), true);

        return $decodedResponse;
    }
}