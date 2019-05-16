<?php

require __DIR__.'/vendor/autoload.php';

lambda(function (array $event) {
    return [
        'message' => 'Hello '.($event['name'] ?? 'world'),
        'event' => $event,
    ];
});
