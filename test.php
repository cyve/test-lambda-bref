<?php

require __DIR__.'/vendor/autoload.php';

/**
 * @see https://docs.aws.amazon.com/aws-sdk-php/v2/api/class-Aws.Lambda.LambdaClient.html
 */
use Aws\Lambda\LambdaClient;

$lambda = new LambdaClient(['version' => 'latest', 'region' => 'us-east-1']);
$result = $lambda->invoke([
    'FunctionName' => 'test-lambda-bref-hello',
    'Payload' => json_encode(['name' => 'Cyril']),
]);
var_dump(json_decode($result->get('Payload')->getContents()));
