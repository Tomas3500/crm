<?php

namespace App\Http\Controllers;
use App\Models\Clint;

use Illuminate\Http\Request;

class StatusController extends BaseController
{
    //

    public  function __invoke()
    {
        $this->service->index();
    }


}
