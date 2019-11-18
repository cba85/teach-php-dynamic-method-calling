<?php

require_once __DIR__ . '/../vendor/autoload.php';

$request = (object) [
    'type' => 'card_declined',
    'user' => 1
];

/*
$controller = new App\Controllers\WebhookController;
$controller->handle($request);
*/

$controller = new App\Controllers\PaymentController;
$controller->store();