<?php

namespace App\Services\Status;

use App\Models\Clint;

class Status
{
    public function index()
    {

        $clint = Clint::with('cars')->get();
        return response()->json($clint);

    }
}
