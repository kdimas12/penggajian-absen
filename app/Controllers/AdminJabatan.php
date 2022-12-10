<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class AdminJabatan extends BaseController
{
    public function index()
    {
        return view('jabatan');
    }

    public function tambah()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(['nama_jabatan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $jabatan = new JabatanModel();
            $jabatan->insert([
                'nama' => $this->request->getPost('nama_jabatan'),
                'uang_lembur' => $this->request->getPost('uang_lembur'),
                'uang_makan' => $this->request->getPost('uang_makan')
            ]);
            return redirect()->to('admin/jabatan');
        }

        echo view('jabatan_tambah');
    }

    public function loadData()
    {
        return datatables('tbl_jabatan')->make();
    }
}
