<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'tbl_pegawai';
    protected $primaryKey = 'id_pegawai';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'nip', 'password', 'id_jabatan', 'id_wilayah'];
}
