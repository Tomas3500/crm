<?php

namespace App\Http\Controllers;

use App\Services\Status\Status;

class BaseController
{
    public $service;

    public function __construct(Status  $service )
    {
        $this->service = $service;
    }
}
