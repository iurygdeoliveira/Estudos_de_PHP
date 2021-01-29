<?php

declare(strict_types=1);
ob_start();

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Index');
    return $response;
});

$app->run();
ob_end_flush();