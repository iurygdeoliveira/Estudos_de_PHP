<?php

declare(strict_types=1);

use app\controllers\Home;

$app->get('/', Home::class . ":index");