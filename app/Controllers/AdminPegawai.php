<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use App\Models\WilayahModel;

class AdminPegawai extends BaseController
{
    public function index()
    {
        return view('pegawai');
    }

    public function tambah()
    {
        $wilayah = new WilayahModel();
        $jabatan = new JabatanModel();
        $data = [
            'jabatan' => $jabatan->findAll(),
            'wilayah' => $wilayah->findAll()
        ];
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_pegawai' => 'required',
            'nip' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $wilayah = new PegawaiModel();
            $wilayah->insert([
                'nama_pegawai' => $this->request->getPost('nama_pegawai'),
                'nip' => $this->request->getPost('nip'),
                'password' => "",
                'id_jabatan' => $this->request->getPost('jabatan'),
                'id_wilayah' => $this->request->getPost('wilayah')
            ]);
            return redirect()->to('admin/pegawai');
        }

        echo view('pegawai_tambah', $data);
    }

    public function loadData()
    {
        return datatables('tbl_pegawai')->join('tbl_jabatan', 'tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan', 'INNER')->addColumn('aksi', function ($data) {
            $urlUbah = base_url('admin/pegawai/' . $data->id_pegawai . '/ubah');
            $urlHapus = base_url('admin/pegawai/' . $data->id_wilayah . '/hapus');
            return '<div class="btn-group"><a href="' . $urlUbah . '" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="' . $urlHapus . '" class="btn btn-danger"><i class="fas fa-trash"></i></a></div>';
        })->rawColumns(['aksi'])->make();
    }
}
