<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'tbl_absensi';
    protected $primaryKey = 'id_absensi';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_pegawai', 'tgl_absensi', 'status_absensi'];
}
