<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = 'tbl_jabatan';
    protected $primaryKey = 'id_jabatan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'uang_lembur', 'uang_makan'];
}
