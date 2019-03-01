<?php

require_once __DIR__ . '/Services/autoloader.php';

use web2hw\Request;
use web2hw\Response;

$request = new Request();

$singleHeader = $request->getHeaders('Host');

$manyHeaders = $request->getHeaders([
    'Accept',
    'Accept-Encoding'
]);

$allHeaders = $request->getHeaders();

echo "Single Header: ";
var_dump($singleHeader);

echo "Many Headers: ";
var_dump($manyHeaders);

echo "All Headers: ";
var_dump($allHeaders);

//Send response
$response = new Response();

$response->setStatusCode(200);

$response->setHeaders([
    'Content-Type: application/json'
]);

$arr = [
    'test' => 'vTest',
    'test2' => [
        'test2.1' => '2.1',
        'test2.2' => [
            'test2.2.1' => '2.2.1'
        ]
    ]
];

$response->setContent(json_encode($arr));

print_r($response->send());