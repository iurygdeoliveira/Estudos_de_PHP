<?php

declare(strict_types=1);

namespace app\models;

use app\traits\Connection;
use app\traits\Create;

class User
{

    // atributtes
    private $error;

    // traits
    use Create;
    use Connection;

    // methods
    public function __construct()
    {
        $this->connectDB();
    }

    public function getError()
    {
        return $this->error;
    }
}