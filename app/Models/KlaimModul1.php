<?php

namespace App\Models;

use CodeIgniter\Model;

class KlaimModul1 extends Model
{
    protected $table = 'klaim_keterangan_1';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'instansi', 'token_pretest', 'token_posttest', 'rating', 'waktu_klaim'];
    protected $useTimestamps = false;
}
