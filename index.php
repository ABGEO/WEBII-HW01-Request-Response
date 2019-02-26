<?php

require_once __DIR__ . '/Services/autoloader.php';

use web2hw\Request;

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