<?php

$event = $_REQUEST;

echo json_encode([
    'message' => 'Hello '.($event['name'] ?? 'world'),
    'event' => $event,
]);
