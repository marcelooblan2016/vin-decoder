<?php
namespace Marxolity\VinDecoder\Tests;
use Marxolity\VinDecoder\Services\VinDecoder\VinDecoderInterface;

class VinDecoderTest extends TestCase
{
    public function test_vehicle_specification_success()
    {
        $response = $this->vinDecoder->getVehicleSpecificationByVin('1NXBR32E85Z505904');
        $this->assertTrue(is_array($response));
        $this->assertTrue(!empty($response['success']));
    }

    public function test_vehicle_market_value_success()
    {
        $response = $this->vinDecoder->getMarketValueByVin('1NXBR32E85Z505904');
        $this->assertTrue(is_array($response));
        $this->assertTrue(!empty($response['success']));
    }
}