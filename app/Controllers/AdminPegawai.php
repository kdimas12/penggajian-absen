<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminPegawai extends BaseController
{
    public function index()
    {
        return view('pegawai');
    }
}
