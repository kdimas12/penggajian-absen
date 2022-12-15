<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use App\Models\WilayahModel;

class Admin extends BaseController
{
    public function index()
    {
        $pegawai = new PegawaiModel();
        $wilayah = new WilayahModel();
        $jabatan = new JabatanModel();
        $data = [
            'pegawai' => $pegawai->countAllResults(),
            'wilayah' => $wilayah->countAllResults(),
            'jabatan' => $jabatan->countAllResults()
        ];
        return view('admin', $data);
    }
}
