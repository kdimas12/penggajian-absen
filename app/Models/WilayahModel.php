<?php

namespace App\Models;

use CodeIgniter\Model;

class WilayahModel extends Model
{
    protected $table = 'tbl_wilayah';
    protected $primaryKey = 'id_wilayah';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_wilayah'];
}
