<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WilayahModel;

class AdminWilayah extends BaseController
{
    public function index()
    {
        return view('wilayah');
    }

    public function tambah()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(['nama_wilayah' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $wilayah = new WilayahModel();
            $wilayah->insert([
                'nama_wilayah' => $this->request->getPost('nama_wilayah'),
            ]);
            return redirect()->to('admin/wilayah');
        }

        echo view('wilayah_tambah');
    }

    public function ubah($id_wilayah)
    {
        $wilayah = new WilayahModel();
        $data['wilayah'] = $wilayah->where('id_wilayah', $id_wilayah)->first();

        $validation = \Config\Services::validation();
        $validation->setRules(['nama_wilayah' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $wilayah->update($id_wilayah, [
                'nama_wilayah' => $this->request->getPost('nama_wilayah'),
            ]);
            return redirect()->to('admin/wilayah');
        }
        echo view('wilayah_ubah', $data);
    }

    public function hapus($id_wilayah)
    {
        $wilayah = new WilayahModel();
        $wilayah->delete($id_wilayah);
        return redirect()->to('admin/wilayah');
    }

    public function loadData()
    {
        return datatables('tbl_wilayah')->addColumn('aksi', function ($data) {
            $urlUbah = base_url('admin/wilayah/' . $data->id_wilayah . '/ubah');
            $urlHapus = base_url('admin/wilayah/' . $data->id_wilayah . '/hapus');
            return '<div class="btn-group"><a href="' . $urlUbah . '" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="' . $urlHapus . '" class="btn btn-danger"><i class="fas fa-trash"></i></a></div>';
        })->rawColumns(['aksi'])->make();
    }
}
