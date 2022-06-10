<?php
$result = [];

$deliveryMethodsArray = [
    [
        'code' => 'dhl',
        'customer_costs' => [
            22 => '1.000',
            11 => '3.000',
        ]
    ],
    [
        'code' => 'fedex',
        'customer_costs' => [
            22 => '4.000',
            11 => '6.000',
        ]
    ]
];

foreach ($deliveryMethodsArray as $c) {
    foreach ($c['customer_costs'] as $key=>$costs) {
        $result[$key][$c['code']] = $costs;
    }
}

var_dump($c);

