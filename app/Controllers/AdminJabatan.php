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
                'nama_jabatan' => $this->request->getPost('nama_jabatan'),
                'uang_lembur' => $this->request->getPost('uang_lembur'),
                'uang_makan' => $this->request->getPost('uang_makan')
            ]);
            return redirect()->to('admin/jabatan');
        }

        echo view('jabatan_tambah');
    }

    public function ubah($id_jabatan)
    {
        $jabatan = new JabatanModel();
        $data['jabatan'] = $jabatan->where('id_jabatan', $id_jabatan)->first();

        $validation = \Config\Services::validation();
        $validation->setRules(['nama_jabatan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $jabatan->update($id_jabatan, [
                'nama_jabatan' => $this->request->getPost('nama_jabatan'),
                'uang_lembur' => $this->request->getPost('uang_lembur'),
                'uang_makan' => $this->request->getPost('uang_makan')
            ]);
            return redirect()->to('admin/jabatan');
        }
        echo view('jabatan_ubah', $data);
    }

    public function hapus($id_jabatan)
    {
        $jabatan = new JabatanModel();
        $jabatan->delete($id_jabatan);
        return redirect()->to('admin/jabatan');
    }

    public function loadData()
    {
        function formatRupiah($value)
        {
            return "Rp " . number_format($value, 2, ',', '.');
        }
        return datatables('tbl_jabatan')->editColumn('uang_lembur', function ($value) {
            return formatRupiah($value);
        })->editColumn('uang_makan', function ($value) {
            return formatRupiah($value);
        })->addColumn('aksi', function ($data) {
            $urlUbah = base_url('admin/jabatan/' . $data->id_jabatan . '/ubah');
            $urlHapus = base_url('admin/jabatan/' . $data->id_jabatan . '/hapus');
            return '<div class="btn-group"><a href="' . $urlUbah . '" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="' . $urlHapus . '" class="btn btn-danger"><i class="fas fa-trash"></i></a></div>';
        })->rawColumns(['aksi'])->make();
    }
}
