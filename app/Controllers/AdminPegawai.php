<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class AdminPegawai extends BaseController
{
    public function index()
    {
        return view('pegawai');
    }

    public function tambah()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_pegawai' => 'required',
            'nip' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $wilayah = new PegawaiModel();
            $wilayah->insert([
                'nama' => $this->request->getPost('nama_pegawai'),
                'nip' => $this->request->getPost('nip'),
                'password' => "",
                'id_jabatan' => $this->request->getPost('jabatan'),
                'id_wilayah' => $this->request->getPost('wilayah')
            ]);
            return redirect()->to('admin/pegawai');
        }

        echo view('pegawai_tambah');
    }

    public function loadData()
    {
        return datatables('tbl_pegawai')->make();
    }
}
