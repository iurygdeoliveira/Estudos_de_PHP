<?php

declare(strict_types=1);

namespace app\models;

use app\traits\Connection;
use app\traits\Create;
use app\traits\Read;
use app\traits\Update;
use app\traits\Delete;

class User
{

    // atributtes
    private $error;

    // traits
    use Connection;
    use Create;
    use Read;
    use Update;
    use Delete;

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
