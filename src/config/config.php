<?php

return [
    'vin_audit' => [
        'api_key' => env('VIN_DECODER_VIN_AUDIT_API_KEY'),
        'urls' => [
            'vehicle_specification_by_vin' => 'https://specifications.vinaudit.com/v3/specifications?key=%s&format=%s&include=attributes,equipment,colors,recalls,warranties,photos&vin=%s',
            'vehicle_market_value_by_vin' => 'https://marketvalue.vinaudit.com/getmarketvalue.php?key=%s&format=%s&vin=%s',
        ],
    ],
];