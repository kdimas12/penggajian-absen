<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminJabatan extends BaseController
{
    public function index()
    {
        return view('jabatan');
    }

    public function tambah()
    {
        return view('jabatan_tambah');
    }
}
