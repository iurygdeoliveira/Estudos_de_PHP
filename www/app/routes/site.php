<?php
declare(strict_types=1);
 
$app->get('/', function ($request, $response) {
    $response->getBody()->write('Index');
    return $response;
});