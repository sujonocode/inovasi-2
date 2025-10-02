<?php

namespace App\Models;

use CodeIgniter\Model;

class DescanKlaimModul2 extends Model
{
    protected $table = 'descan_klaim_keterangan_2';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'instansi', 'token_pretest', 'token_posttest', 'rating', 'waktu_klaim'];
    protected $useTimestamps = false;
}
