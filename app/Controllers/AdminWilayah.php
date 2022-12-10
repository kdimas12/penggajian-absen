<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminWilayah extends BaseController
{
    public function index()
    {
        return view('wilayah');
    }
}
