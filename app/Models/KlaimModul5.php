<?php

namespace App\Models;

use CodeIgniter\Model;

class KlaimModul5 extends Model
{
    protected $table = 'klaim_keterangan_5';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'instansi', 'token_pretest', 'token_posttest', 'rating', 'waktu_klaim'];
    protected $useTimestamps = false;
}
