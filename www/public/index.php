<?php

declare(strict_types=1);
ob_start();

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use app\controllers\Home;
use app\controllers\Login;
use app\controllers\Admin;

$app = AppFactory::create();

// WEB ROUTES
$app->get('/', Home::class . ":index");

// LOGIN ROUTES
$app->get('/login', Login::class . ":index");
$app->get('/recuperar', Login::class . ":forgot");

// ADMIN ROUTES
$app->post('/admin', Admin::class . ":index");

$app->run();
ob_end_flush();