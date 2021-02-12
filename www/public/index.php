<?php

declare(strict_types=1);
session_start();
ob_start();

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Middleware\MethodOverrideMiddleware;
use app\controllers\Home;
use app\controllers\Login;
use app\controllers\Admin;
use app\controllers\Redirect;

$app = AppFactory::create();

// WEB ROUTES
$app->get('/', Home::class . ":index");

// LOGIN ROUTES
$app->get('/login', Login::class . ":index");
$app->get('/recuperar', Login::class . ":forgot");
$app->post('/access', Login::class . ":access");

// ADMIN ROUTES
$app->post('/admin', Admin::class . ":dashboard");
$app->get('/admin', Admin::class . ":dashboard");
$app->get('/user', Admin::class . ":user");

// REDIRECT ROUTES
$app->get('/redirecionar', Redirect::class . ":index");

// ERROR ROUTES
$app->get('/erro', Home::class . ":error");



// Add Override verbs http
$methodOverrideMiddleware = new MethodOverrideMiddleware();
$app->add($methodOverrideMiddleware);


// ROUTES NOT FOUND
$app->map(
    ['GET', 'POST', 'DELETE', 'PUT', 'PATCH'],
    '/{routes:.+}',
    function ($resquest, $response) {
        return redirect($response, '/erro');
    }
);
$app->run();
ob_end_flush();