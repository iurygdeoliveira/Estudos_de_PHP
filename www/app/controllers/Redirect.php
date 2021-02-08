<?php

declare(strict_types=1);

namespace app\controllers;

use app\classes\Flash;

class Redirect extends Base
{
    public function index($request, $response)
    {

        Flash::set('message', 'Testando redirecionamento');

        return redirect($response, '/');
    }
}